<!DOCTYPE html>
<html>
<head>
    <title>Add Product - Farmer Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Add New Product</h1>
        
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="item_name" name="item_name" required>
            </div>
            
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="0" required>
            </div>
            
            <div class="mb-3">
                <label for="price_per_kg" class="form-label">Price per kg ($)</label>
                <input type="number" step="0.01" class="form-control" id="price_per_kg" name="price_per_kg" min="0" required>
            </div>
            
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>