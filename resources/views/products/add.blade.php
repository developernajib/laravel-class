@extends('layouts.old.body')

@section('products')
<h3>Add product</h3>
<form method="post" action="{{ route('product.store') }}" id="addProductForm">
    @csrf
    <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input name="name" type="text" class="form-control" id="productName" required>
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input name="product_price" type="number" class="form-control" id="productPrice" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="productStock" class="form-label">Stock</label>
        <input name="stock" type="number" class="form-control" id="productStock" required>
    </div>
    <div class="modal-footer mt-5">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" form="addProductForm" class="btn btn-primary">Add Product</button>
    </div>
</form>
@endsection