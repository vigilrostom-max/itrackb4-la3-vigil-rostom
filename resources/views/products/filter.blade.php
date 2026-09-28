<!DOCTYPE html>
<html>
<head>
    <title>Filter Products</title>
</head>
<body>
    <h1>My Product List</h1>
    <p>Prepared by: Rostom P. Vigil</p>

    @if ($category === null)
        <p>Showing all products (no filter is active).</p>
    @else
        <p>Filter active: category is <strong>{{ $category }}</strong></p>
    @endif

    @if (count($products) === 0)
        <p>No products match that category.</p>
    @else
        <table border="1" cellpadding="8">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Category</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product['id']) }}">{{ $product['name'] }}</a></td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td>{{ $product['category'] }}</td>
            </tr>
            @endforeach
        </table>
    @endif

    <p>
        <a href="{{ route('products.filter') }}">Show all products</a> |
        <a href="{{ route('products.index') }}">Back to the product list</a>
    </p>
</body>
</html>