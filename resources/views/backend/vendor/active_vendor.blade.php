@extends('admin.dashboard')
@section('admin')
    <div class="page-content m-3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">All Active Vendor</p>
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
                                <th>Shop Name</th>
                                <th>Vendor Username</th>
                                <th>Join Date</th>
                                <th>Vendor Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activeVendor as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> {{ $item->name }}</td>
                                    <td> {{ $item->username }}</td>
                                    <td> {{ $item->vendor_join }}</td>
                                    <td> {{ $item->email }} </td>
                                    <td> <span class="btn"
                                            style="cursor: default;color: #fff;background-color: #17a00e;">{{ $item->status }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('active.vendor.details', $item->id) }}"
                                            class="btn btn-info">Vendor
                                            Details</a>
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
