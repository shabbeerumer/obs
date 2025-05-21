<h2>Thank you for your order, {{ $user->full_name }}!</h2>

<p>Here are your order details:</p>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Title</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->Quantity }}</td>
                <td>${{ $product->Subtotal }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<p><strong>Total:</strong> ${{ $products->sum('Subtotal') }}</p>
