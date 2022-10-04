@extends('admin.admin_master')
@section('title')
Edit About | Openlane Company
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Home Banner</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Edit Home Banner</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $about->id }}">

                                {{-- Title --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" value="{{ $about->title }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Experience Content --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Experience Content</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="exp_content" type="text" value="{{ $about->exp_content }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="desc">{{ $about->desc }}</textarea>

                                    </div>
                                </div>

                                {{-- About Image --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="about_img" type="file" id="about_img">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ (!empty($about->about_img)) ? url($about->about_img) : url('uploads/no_image.jpg')}}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Update About" />
                            </form>




                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $("#about_img").change(function (e) {
                var readImg = new FileReader();
                readImg.onload = function (e) {
                    $("#show_photo").attr("src", e.target.result);

                }
                readImg.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
