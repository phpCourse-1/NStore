@extends('admin.dashboard')
@section('admin')
    <div class="page-content m-3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">All Banners</p>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.banner') }}" class="btn btn-primary">Add Banner</a>
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
                                <th>Banner Title</th>
                                <th>Banner URL</th>
                                <th>Banner Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->url }}</td>
                                    <td> <img src="{{ asset($item->image) }}"
                                            style="width: 100px; height:50px;object-fit:cover;">
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.slider', $item->id) }}" class="btn btn-info"
                                            title="Edit Data"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('delete.slider', $item->id) }}" class="btn btn-danger"
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
