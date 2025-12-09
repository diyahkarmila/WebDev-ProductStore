<x-template title="Product List">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>🍰 Our Cakes & Bakery</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">➕ Add New Product</a>
    </div>

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($product['description'], 50) }}</p>
                    <h6 class="text-success">Rp {{ number_format($product['price'], 0, ',', '.') }}</h6>
                    <div class="mt-3">
                        <a href="{{ route('products.show', $product['id']) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-sm btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-template>