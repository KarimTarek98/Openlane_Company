@extends('admin.admin_master')
@section('title')
Add New Portofolio | Openlane Company
@endsection
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Portofolio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Portofolio</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('store.portofolio') }}" id="store_portfolio" method="POST" enctype="multipart/form-data">
                                @csrf



                                {{-- Title --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portofolio Name</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="name" type="text" value="{{ old('name') }}" id="example-text-input">

                                    </div>
                                </div>

                                {{-- Experience Content --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portofolio Title</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="title" type="text" value="{{ old('title') }}" id="example-text-input">

                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="form-group col-sm-10">
                                        <textarea id="elm1" name="description" value="{{ old('description') }}"></textarea>

                                    </div>
                                </div>

                                {{-- About Image --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portofolio Image</label>
                                    <div class="form-group col-sm-10">
                                        <input class="form-control" name="image" type="file" id="about_img">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="form-group col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ url('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Add Portofolio" />
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

@section('js')
    <script>
        $(document).ready(function (){
        $('#store_portfolio').validate({
            rules: {
                name: {
                    required : true,
                    maxlength: 100
                },

                title: {
                    required: true,
                    maxlength: 100
                },

                description: {
                    required: true
                },

                image: {
                    required: true,
                    extension: "jpg|png"
                }

            },
            messages :{
                name: {
                    required : 'Please Enter Portfolio Name',
                    maxlength: 'Max length is 100 character'
                },

                title: {
                    required : 'Please Enter Portfolio Title',
                    maxlength: 'Max length is 100 character'
                },

                description: {
                    required : 'Please Enter Portfolio Description',
                },

                image: {
                    required: 'Please insert image',
                    extension: 'Image extension not supported'
                }
            },
            errorElement : 'span',

            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },

            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    </script>
@endsection
