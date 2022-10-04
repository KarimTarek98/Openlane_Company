@extends('admin.admin_master')
@section('title')
Edit Blog | Dashboard
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
                        <h4 class="mb-sm-0">Edit Blog</h4>

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

                            <form action="{{ route('update.blog') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                {{-- Blog Title --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_title" type="text" value="{{ $blog->blog_title }}" id="example-text-input">
                                        @error('blog_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Blog Image --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_image" type="file" id="blog_img">
                                        @error('blog_image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" alt="200x200" id="show_photo"
                                        src="{{ (!empty($blog->blog_image)) ? asset($blog->blog_image) : asset('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                    </div>
                                </div>

                                {{-- Blog Description --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="blog_description" value="{!! $blog->blog_description !!}"></textarea>
                                        @error('blog_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Blog Tags --}}
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="blog_tags" type="text" value="{{ $blog->blog_tags }}" data-role="tagsinput">
                                        @error('blog_tags')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Blog Category --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Blog Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="blog_category_id" aria-label="Default select example">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ ($blog->blog_category_id == $category->id) ? 'selected' : '' }}>{{ $category->blog_category }}</option>
                                            @endforeach
                                            {{-- <option value="2">Two</option>
                                            <option value="3">Three</option> --}}
                                            </select>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Update Blog" />
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
        $("#blog_img").change(function (e) {
            var readImg = new FileReader();
            readImg.onload = function (e) {
                $("#show_photo").attr("src", e.target.result);

            }
            readImg.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
