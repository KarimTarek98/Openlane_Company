@extends('admin.admin_master')
@section('title')
Add New Service | Dashboard
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" integrity="sha512-X6069m1NoT+wlVHgkxeWv/W7YzlrJeUhobSzk4J09CWxlplhUzJbiJVvS9mX1GGVYf5LA3N9yQW5Tgnu9P4C7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .bootstrap-tagsinput .tag {
        margin-right: 5px;
        font-weight: 800px;
        background-color: #0096b7;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding-left: 1px
    }
</style>
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form id="store_service" action="{{ route('store.service') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Service Title --}}
                                <div class="row mb-3">
                                    <label for="service_title" class="col-sm-2 col-form-label">Service Title</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="service_title" type="text" value="{{ old('service_title') }}" id="service_title">
                                        @error('service_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Service Image --}}
                                <div class="row mb-3">
                                    <label for="service_img" class="col-sm-2 col-form-label">Service Image</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="service_img" type="file" id="service_img">
                                        @error('blog_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ url('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>

                                {{-- Service Description --}}
                                <div class="row mb-3">
                                    <label for="service_description" class="col-sm-2 col-form-label">Service Description</label>
                                    <div class="form-group col-sm-10">
                                        <textarea id="elm1" name="service_description" value="{{ old('service_description') }}"></textarea>
                                        @error('service_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Service List --}}
                                <div class="row mb-3">
                                    <label for="service_list" class="col-sm-2 col-form-label">Service List</label>
                                    <div class="form-group col-sm-10">
                                        <textarea name="service_list" class="form-control" id="service_list" rows="2" data-role="tagsinput" placeholder="Enter list separated by comma"></textarea>
                                        @error('service_list')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Add Service" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $("#service_img").change(function (e) {
                var img = new FileReader();
                img.onload = function (e) {
                    $("#show_photo").attr("src", e.target.result);
                }
                img.readAsDataURL(e.target.files['0']);
            });

        });
    </script>


    @endsection
