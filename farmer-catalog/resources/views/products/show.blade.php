<!DOCTYPE html>
<html>
<head>
    <title>View Product - Farmer Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Product Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->item_name }}</h5>
                <p class="card-text"><strong>Quantity:</strong> {{ $product->quantity }}</p>
                <p class="card-text"><strong>Price per kg:</strong> ${{ number_format($product->price_per_kg, 2) }}</p>
                <p class="card-text"><strong>Location:</strong> {{ $product->location }}</p>
                <p class="card-text"><strong>Created:</strong> {{ $product->created_at->format('M d, Y') }}</p>
                
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>