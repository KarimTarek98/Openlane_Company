@extends('admin.admin_master')

@section('title')
    Dashboard | All Services
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Services</li>
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

                            <h4 class="card-title">Our Services</h4>

                            <a href="{{ route('add.service') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Service</a><br><br>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service Title</th>
                                        <th>Service Image</th>
                                        <th>Process</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($services as $service)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $service->service_title }}</td>
                                            <td>
                                                <img src="{{ asset($service->service_img) }}" width="120px" height="80px" alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.service', $service->id) }}" class="btn btn-info"
                                                    title="Edit Service">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('delete.service', $service->id) }}" class="btn btn-danger"
                                                    title="Delete Service" id="delete">
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
