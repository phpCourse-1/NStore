@extends('admin.dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content m-3">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div style="display: flex;align-items: center;justify-content: center;">
                <p class="h4 text-gray-800 m-0">Add Brand</p>
            </div>
        </div>
        <div class="container p-0">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="myForm" method="post" action="{{ route('store.brand') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Brand Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="brand_name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Brand Image</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="file" name="brand_image" class="form-control" id="image" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
                                                style="width:100px; height: 100px;object-fit:cover;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
            $('#myForm').validate({
                rules: {
                    brand_name: {
                        required: true,
                    },
                    brand_image:{
                        required: true,
                    }
                },
                messages: {
                    brand_name: {
                        required: 'Please Enter Brand Name!',
                    },
                    brand_image: {
                        required: 'Please Enter Brand Image!',
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
