<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    protected $apiKey;
    protected $apiEndpoint = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent';

    public function __construct()
    {
        // Store API key from environment variable
        $this->apiKey = env('GEMINI_API_KEY');
    }

    public function generateResponse(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'message' => 'required|string|max:1000',
            ]);

            $userMessage = $request->input('message');
            
            // Log that we received a message
            Log::info('Chatbot received message: ' . $userMessage);
            
            if (empty($this->apiKey)) {
                Log::error('Gemini API key is missing or empty');
                return response()->json([
                    'success' => false,
                    'message' => 'API key is missing. Please set GEMINI_API_KEY in your .env file.'
                ], 500);
            }
            
            Log::info('Using API Key: ' . substr($this->apiKey, 0, 5) . '...');
            
            // Updated payload structure according to latest documentation
            $payload = [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $userMessage]
                        ]
                    ]
                ]
            ];
            
            Log::info('Sending request to Gemini API', [
                'endpoint' => $this->apiEndpoint,
                'payload' => json_encode($payload)
            ]);
            
            // Prepare request to Gemini API
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->apiEndpoint . '?key=' . $this->apiKey, $payload);
            
            // Log API response status
            Log::info('Gemini API response status: ' . $response->status());
            Log::info('Gemini API response body: ' . $response->body());
            
            if (!$response->successful()) {
                Log::error('Gemini API error', [
                    'status' => $response->status(),
                    'response' => $response->body()
                ]);
                
                // Check for specific error cases
                $errorBody = json_decode($response->body(), true);
                $errorMessage = 'Unknown error occurred';
                
                if (isset($errorBody['error']['message'])) {
                    $errorMessage = $errorBody['error']['message'];
                }
                
                return response()->json([
                    'success' => false,
                    'message' => 'Error from Gemini API: ' . $errorMessage
                ], 500);
            }

            $responseData = $response->json();
            
            // Log the response structure for debugging
            Log::info('Gemini API response structure: ' . json_encode(array_keys($responseData)));
            
            // Extract and return the AI-generated response
            if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
                $aiResponse = $responseData['candidates'][0]['content']['parts'][0]['text'];
                Log::info('Successfully generated AI response');
                return response()->json([
                    'success' => true,
                    'message' => $aiResponse
                ]);
            } else {
                Log::error('Missing expected response structure from Gemini API', [
                    'response' => json_encode($responseData)
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to parse response from Gemini AI. Response structure: ' . json_encode($responseData)
                ], 500);
            }
        } catch (\Exception $e) {
            Log::error('Exception in chatbot', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
} 