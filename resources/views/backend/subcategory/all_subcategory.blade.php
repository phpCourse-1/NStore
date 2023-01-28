@extends('admin.dashboard')
@section('admin')
    <div class="page-content m-3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">All SubCategory</p>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.subcategory') }}" class="btn btn-primary">Add SubCategory</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>SubCategory Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> {{ $item['category']['category_name'] }}</td>
                                    <td> {{ $item->subcategory_name }} </td>
                                    <td>
                                        <a href="{{ route('edit.subcategory', $item->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('delete.subcategory', $item->id) }}" class="btn btn-danger"
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
