@extends('admin.admin_master')
@section('title')
Edit Footer | Openlane Company
@endsection
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Footer</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Footer</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('update.footer') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $footer->id }}">

                            {{-- Phone Number --}}
                            <div class="row mb-3">
                                <label for="phone_number" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="phone_number" type="text" value="{{ $footer->phone_number }}" id="phone_number">
                                    @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Contact Text --}}
                            <div class="row mb-3">
                                <label for="contact_text" class="col-sm-2 col-form-label">Contact Text</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="contact_text" class="form-control" rows="3" id="contact_text">
                                        {{ $footer->contact_text }}
                                    </textarea>
                                    @error('contact_text')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Country --}}
                            <div class="row mb-3">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="country" type="text" value="{{ $footer->country }}" id="country">
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Address Details --}}
                            <div class="row mb-3">
                                <label for="address_details" class="col-sm-2 col-form-label">Address Details</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="address_details" type="text" value="{{ $footer->address_details }}" id="address_details">
                                    @error('address_details')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Company Email --}}
                            <div class="row mb-3">
                                <label for="company_email" class="col-sm-2 col-form-label">Company Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="company_email" type="text" value="{{ $footer->company_email }}" id="company_email">
                                    @error('company_email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Connect Description --}}
                            <div class="row mb-3">
                                <label for="connect_small_desc" class="col-sm-2 col-form-label">Connect Description</label>
                                <div class="col-sm-10">
                                    <textarea required="" name="connect_small_desc" class="form-control" rows="3" id="connect_small_desc">
                                        {{ $footer->connect_small_desc }}
                                    </textarea>
                                    @error('connect_small_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Copyright --}}
                            <div class="row mb-3">
                                <label for="copyright" class="col-sm-2 col-form-label">Copyright</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="copyright" type="text" value="{{ $footer->copyright }}" id="copyright">
                                    @error('copyright')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <input type="submit" class="btn btn-outline-info waves-effect waves-light" value="Update Footer" />
                        </form>




                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

@endsection
