<x-template title="@isset($product) Edit Product @else Add Product @endisset">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">@isset($product) Edit Cake Product @else Add New Cake @endisset</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="@isset($product) {{ route('products.update', $product['id']) }} @else {{ route('products.store') }} @endisset">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           value="{{ $product['name'] ?? old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product['description'] ?? old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price (Rp)</label>
                    <input type="number" class="form-control" id="price" name="price" 
                           value="{{ $product['price'] ?? old('price') }}" required min="1000">
                </div>
                <button type="submit" class="btn btn-success">
                    @isset($product) Update Product @else Save Product @endisset
                </button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</x-template>