@extends('admin.layouts.template')
@section('page_title')
All Sub-Category | Admin | KTL-MART
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page /</span> All Sub Categories</h4>
    <!-- Bootstrap Table with Header - Light -->
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="card">
        <h5 class="card-header">Available Sub Category Information</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Sub Category Name</th>
                        <th>Category</th>
                        <th>Product</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($allsubcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory->id}}</td>
                        <td>{{$subcategory->subcategory_name}}</td>
                        <td>{{$subcategory->category_name}}</td>
                        <td>{{$subcategory->product_count}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn btn-primary"
                                        href="{{ route('editsubcategory', $subcategory->id) }}"><i
                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item btn btn-warning"
                                        href="{{ route('deletesubcategory', $subcategory->id) }}"><i
                                            class="bx bx-trash me-1"></i> Delete</a>
                                    <!-- style="width:120px;"  style="width:120px;" -->
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