@extends('admin.admin_master')
@section('title')
Add Multi Image | Openlane Company
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update About Icon</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">About Icons</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('update.about_icon') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="icon_id" value="{{ $icon->id }}">

                                {{-- Multi Image --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select New Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="new_icon" type="file" id="multi_icons" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ (!empty($icon->multi_icons)) ? asset($icon->multi_icons) : asset('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Update Icon" />
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
            $("#multi_icons").change(function(e) {
                var readFile = new FileReader();
                readFile.onload = function(e) {
                    $("#show_photo").attr('src', e.target.result)
                }
                readFile.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

