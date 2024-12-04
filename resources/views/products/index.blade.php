@extends('layouts.body')


@section('products')
    <div>
        <div class="container mt-5">
            <div class="table-wrapper">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0">Product Management</h2>
                    <a href="{{ route('product.add') }}">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New Product
                        </button>
                    </a>
                </div>

                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>${{ $data->price }}</td>
                                <td>{{ $data->stock }}</td>
                                <td class="action-buttons">
                                    <a href="{{ route('product.edit', ['id' => $data->id]) }}" class="btn btn-sm btn-info">
                                        Edit
                                    </a>

                                    <a href="{{ route('product.delete', ['id' => $data->id]) }}"
                                        class="btn btn-sm btn-danger" onclick="return confirmDelete()">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Product Modal -->
        <div class="modal fade" id="addProductModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('product.store') }}" id="addProductForm">
                            @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input name="name" type="text" class="form-control" id="productName" required>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Price</label>
                                <input name="product_price" type="number" class="form-control" id="productPrice"
                                    step="0.01" required>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
