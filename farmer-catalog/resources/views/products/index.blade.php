<!DOCTYPE html>
<html>
<head>
    <title>Farmer Product Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Farmer Product Catalog</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price per kg</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->item_name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>${{ number_format($product->price_per_kg, 2) }}</td>
                    <td>{{ $product->location }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($products->isEmpty())
            <div class="alert alert-info">
                No products found. <a href="{{ route('products.create') }}">Add your first product!</a>
            </div>
        @endif
    </div>
</body>
</html>