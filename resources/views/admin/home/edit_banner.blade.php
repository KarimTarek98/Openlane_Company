@extends('admin.admin_master')
@section('title')
Edit Profile | Openlane Company
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

                            <form action="{{ route('update.banner') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $bannerInfo->id }}">

                                {{-- Title --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" value="{{ $bannerInfo->title }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Short Intro --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Intro</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="short_intro" type="text" value="{{ $bannerInfo->short_intro }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Video Url --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="video_url" type="text" value="{{ $bannerInfo->video_url }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Banner Image --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Banner Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="banner_img" type="file" id="profile_photo">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ (!empty($bannerInfo->banner_img)) ? url($bannerInfo->banner_img)
                                        : url('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Update Profile" />
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
            $("#profile_photo").change(function(e) {
                var readFile = new FileReader();
                readFile.onload = function(e) {
                    $("#show_photo").attr('src', e.target.result)
                }
                readFile.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
