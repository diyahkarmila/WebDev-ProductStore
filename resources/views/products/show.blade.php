<x-template title="Product Detail">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">🍰 {{ $product['name'] }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong><br>{{ $product['description'] }}</p>
            <p><strong>Price:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
            <div class="mt-4">
                <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</x-template>