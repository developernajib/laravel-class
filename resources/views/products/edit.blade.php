@extends('layouts.body')    

@section('products')
    <h5 class="modal-title">Edit Product</h5>
    <form method="POST" action="{{ route('product.edit.store', ['id' => $product->id]) }}">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="editProductName" class="form-label">Product Name</label>
            <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="editProductName"
                required>
        </div>
        <div class="mb-3">
            <label for="editProductPrice" class="form-label">Price</label>
            <input name="price" value="{{ $product->price }}" type="number" class="form-control"
                id="editProductPrice" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="editProductStock" class="form-label">Stock</label>
            <input name="stock" value="{{ $product->stock }}" type="number" class="form-control"
                id="editProductStock" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
@endsection