@extends('admin.admin_master')

@section('title')
    Blog | Dashboard
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Blogs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Blogs</h4>

                            <a href="{{ route('add_blog') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Blog</a><br><br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blog Title</th>
                                        <th>Blog Image</th>
                                        <th>Blog Tags</th>
                                        <th>Blog Category</th>
                                        <th>Process</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($blogs as $blog)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>

                                            <td>{{ $blog->blog_title }}</td>
                                            <td>
                                                <img src="{{ asset($blog->blog_image) }}" width="120" height="100" alt="">
                                            </td>
                                            <td>{{ $blog->blog_tags }}</td>
                                            <td>{{ $blog->category->blog_category }}</td>

                                            <td>
                                                <a href="{{ route('edit.blog', $blog->id) }}" class="btn btn-info"
                                                    title="Edit Portofolio">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('delete.blog', $blog->id) }}" class="btn btn-danger"
                                                    title="Delete Portofolio" id="delete">
                                                    <i class=" far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection

@section('js')
    {{-- include sweet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");


                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })


            });

        });
    </script>
@endsection
