document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chatbot-messages');
    const userInput = document.getElementById('user-input');
    const sendButton = document.getElementById('send-button');
    const chatbotIcon = document.getElementById('chatbot-icon');
    const chatbotWidget = document.getElementById('chatbot-widget');
    
    // Check if elements exist
    if (!chatMessages) {
        console.error('Chat messages container not found');
    }
    if (!userInput) {
        console.error('User input element not found');
    }
    if (!sendButton) {
        console.error('Send button not found');
    }
    
    // Function to add a message to the chat
    function addMessage(message, isUser = false) {
        if (!chatMessages) {
            console.error('Cannot add message: chat messages container not found');
            return;
        }
        
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${isUser ? 'user-message' : 'bot-message'}`;
        
        const messageContent = document.createElement('div');
        messageContent.className = 'message-content';
        messageContent.textContent = message;
        
        messageDiv.appendChild(messageContent);
        chatMessages.appendChild(messageDiv);
        
        // Scroll to the bottom of the chat
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Function to send message to the server
    async function sendMessage(message) {
        try {
            console.log('Sending message to server:', message);
            
            // Check if CSRF token exists
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (!csrfToken) {
                console.error('CSRF token not found. Make sure you have <meta name="csrf-token" content="{{ csrf_token() }}"> in your HTML.');
                addMessage('Error: CSRF token not found. Please refresh the page and try again.');
                return;
            }
            
            // Make the API request
            const response = await fetch('/api/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken.getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ message: message })
            });
            
            console.log('Response status:', response.status);
            
            // Parse the response
            const data = await response.json();
            console.log('Response data:', data);
            
            if (data.success) {
                addMessage(data.message);
            } else {
                console.error('API error:', data.message);
                addMessage('Sorry, I encountered an error. Error details: ' + data.message);
            }
        } catch (error) {
            console.error('Error sending message:', error);
            addMessage('Sorry, I encountered a connection error. Please check your internet connection and try again.');
        }
    }
    
    // Event listener for send button
    if (sendButton) {
        sendButton.addEventListener('click', function() {
            if (!userInput) {
                console.error('Cannot get message: user input element not found');
                return;
            }
            
            const message = userInput.value.trim();
            
            if (message) {
                addMessage(message, true);
                userInput.value = '';
                
                // Show typing indicator
                const typingIndicator = document.createElement('div');
                typingIndicator.className = 'message bot-message typing-indicator';
                typingIndicator.innerHTML = '<div class="dots"><span>.</span><span>.</span><span>.</span></div>';
                
                if (chatMessages) {
                    chatMessages.appendChild(typingIndicator);
                    
                    // Send the message to the server
                    setTimeout(() => {
                        try {
                            chatMessages.removeChild(typingIndicator);
                        } catch (e) {
                            console.error('Error removing typing indicator:', e);
                        }
                        sendMessage(message);
                    }, 1000);
                }
            }
        });
    }
    
    // Event listener for Enter key press
    if (userInput) {
        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && sendButton) {
                sendButton.click();
            }
        });
    }
    
    // Toggle chatbot widget if icon exists
    if (chatbotIcon && chatbotWidget) {
        chatbotIcon.addEventListener('click', function() {
            chatbotWidget.classList.toggle('active');
            
            // Focus on input when opened
            if (chatbotWidget.classList.contains('active') && userInput) {
                userInput.focus();
            }
        });
    }
    
    // Log that the chatbot has initialized
    console.log('Chatbot initialized successfully');
}); 