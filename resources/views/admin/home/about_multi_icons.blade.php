@extends('admin.admin_master')

@section('title')
    Dashboard | About Multi Icons
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">About Icons</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">About Icons</li>
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

                            <h4 class="card-title">About Icons</h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon Image</th>
                                        <th>Process</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($multiIcons as $icon)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset($icon->multi_icons) }}" style="width: 60px; height:60px"
                                                    alt="icon">
                                            </td>
                                            <td>
                                                @can('store_icons')
                                                <a href="{{ route('about.edit_icon', $icon->id) }}" class="btn btn-info"
                                                    title="Edit Image">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('about.delete_icon', $icon->id) }}" class="btn btn-danger"
                                                    title="Delete Image" id="delete">
                                                    <i class=" far fa-trash-alt"></i>
                                                </a>
                                                @endcan
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
