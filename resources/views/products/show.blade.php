<!DOCTYPE html>
<html>
<head>
    <title>{{ $product['name'] }}</title>
</head>
<body>
    <h1>{{ $heading }}</h1>
    <p>Prepared by: Rostom P. Vigil</p>

    <table border="1" cellpadding="8">
        <tr><th>ID</th><td>{{ $product['id'] }}</td></tr>
        <tr><th>Name</th><td>{{ $product['name'] }}</td></tr>
        <tr><th>Price</th><td>{{ $product['price'] }}</td></tr>
        <tr><th>Stock</th><td>{{ $product['stock'] }}</td></tr>
        <tr><th>Category</th><td>{{ $product['category'] }}</td></tr>
    </table>

    <p><a href="{{ route('products.index') }}">Back to the product list</a></p>
</body>
</html>