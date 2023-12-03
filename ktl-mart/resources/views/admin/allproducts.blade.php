@extends('admin.layouts.template')
@section('page_title')
All Products | Admin | KTL-MART
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> All Products</h4>
    <!-- Bootstrap Table with Header - Light -->
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="card">
        <h5 class="card-header">All Available Product Information</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <img style="height:100px;" src="{{asset($product->product_img)}}" alt=""> <br>
                            <a href="{{route('editproductimg', $product->id)}}" class="btn btn-primary">Change Image</a>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-primary" href="{{route('editproduct', $product->id)}}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item btn btn-warning" href="{{route('deleteproduct', $product->id)}}">
                                        <i class="bx bx-trash me-1"></i> Delete</a>
                                    <!-- style="width:120px;" style="width:120px;" -->
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Table with Header - Light -->
</div>
@endsection