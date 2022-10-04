@extends('admin.admin_master')
@section('title')
    Admin Profile | Openlane Company
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/mystyles.css') }}">
@endsection

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="admin-profile">

                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-6">

                                    <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200"
                                        src="{{ (!empty($user->profile_photo)) ? url('uploads/admin-photos/' . $user->profile_photo)
                                        : url('uploads/no_image.jpg') }}"
                                        data-holder-rendered="true">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title">Name : <span>{{ $user->name }}</span></h4>
                                        <h4 class="card-title">Email : <span>{{ $user->email }}</span></h4>
                                        <h4 class="card-title">Username : <span>{{ $user->username }}</span></h4>

                                        <a href="{{ route('edit.profile') }}" type="button"
                                            class="btn btn-outline-info waves-effect waves-light">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>
@endsection
