@extends('admin.dashboard')
@section('admin')
    <div class="page-content m3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">All Brands</p>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.brand') }}" class="btn btn-primary">Add Brand</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>Brand Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->brand_name }}</td>
                                    <td> <img src="{{ asset($item->brand_image) }}" style="width: 70px; height:40px;"> </td>
                                    <td>
                                        <a href="{{ route('edit.brand', $item->id) }}" class="btn btn-info"
                                            title="Edit Data"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('delete.brand', $item->id) }}" class="btn btn-danger"
                                            id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
