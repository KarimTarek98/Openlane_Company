@extends('admin.admin_master')
@section('title')
Add New Category | Dashboard
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('store.category') }}" id="store_blog" method="POST">
                                @csrf

                                {{-- Category Name --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="blog_category" type="text" autocomplete="off" value="{{ old('blog_category') }}" id="example-text-input">
                                        {{-- @error('blog_category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Add Category" />
                            </form>




                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>


@endsection

@section('js')



<script type="text/javascript">
    $(document).ready(function () {
        $("#store_blog").validate({

        rules: {
            blog_category: {
                required: true,
                maxlength: 25,
            },
        },

        messages: {
            blog_category: {
                required: "Category Name is Required!",
                maxlength: "Max Length is 25 chars!"
            },
        },

        errorElement: 'span',

        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },

        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },

        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },

        });
    });
</script>

@endsection
