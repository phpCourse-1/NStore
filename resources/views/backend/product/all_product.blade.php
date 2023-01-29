@extends('admin.dashboard')
@section('admin')
    <div class="page-content m-3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">All Product</p>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.subcategory') }}" class="btn btn-primary">Add Product</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>QTY</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> <img src="{{ asset($item->product_thambnail) }}" style="width: 70px; height:40px;">
                                    </td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>{{ $item->product_qty }}</td>
                                    <td>{{ $item->discount_price }}</td>
                                    <td>{{ $item->status }}</td>

                                    <td>
                                        <a href="{{ route('edit.category', $item->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('delete.category', $item->id) }}" class="btn btn-danger"
                                            id="delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
