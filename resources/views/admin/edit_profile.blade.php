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
                        <h4 class="mb-sm-0">Edit Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Edit Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Name --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" value="{{ $user->name }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Username --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username" type="text" value="{{ $user->username }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email" value="{{ $user->email }}" id="example-text-input">
                                    </div>
                                </div>

                                {{-- Profile Photo --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Photo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="profile_photo" type="file" id="profile_photo">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ (!empty($user->profile_photo)) ? url('uploads/admin-photos/' . $user->profile_photo)
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
