@extends('admin.admin_master')

@section('title')
    Dashboard | Footer
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Footer</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Footer</li>
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

                            <h4 class="card-title">Footer Info</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Phone Number</th>
                                        <th>Contact Text</th>
                                        <th>Country</th>
                                        <th>Address Details</th>
                                        <th>Company Email</th>
                                        <th>Connect Description</th>
                                        <th>Copyright</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>


                                <tbody>

                                        <tr>
                                            <td>{{ $footer->phone_number }}</td>
                                            <td>{{ $footer->contact_text }}</td>
                                            <td>{{ $footer->country }}</td>
                                            <td>{{ $footer->address_details }}</td>
                                            <td>{{ $footer->company_email }}</td>
                                            <td>{{ $footer->connect_small_desc }}</td>
                                            <td>{{ $footer->copyright }}</td>
                                            <td>
                                                <a href="{{ route('edit.footer', $footer->id) }}" class="btn btn-info"
                                                    title="Edit Footer">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>

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
