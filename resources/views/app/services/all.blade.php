@extends('app.main_master')

@section('css')
<link rel="stylesheet" href="" />
@endsection

@section('title')
Services | Openlane Company
@endsection

@section('content')

<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">All Services</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
            <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-details-area -->
<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @foreach ($services as $service)
                <div class="services__details__thumb">
                    <img src="{{ asset($service->service_img) }}" width="850" height="430" alt="">
                </div>
                <div class="services__details__content">
                    <h2 class="title">{{ $service->service_title }}</h2>
                    <p>{!! $service->service_description !!}</p>
                    @php
                        $servicesList = explode(',', $service->service_list);
                    @endphp
                    <ul class="services__details__list">
                        @foreach ($servicesList as $serviceList)
                        <li>{{ $serviceList }}</li>
                        @endforeach
                    </ul>

                @endforeach
            </div>



        </div>
    </div>

    <div class="pagination-wrap">
        {{ $services->links('vendor.pagination.services') }}
    </div>

</section>
<!-- services-details-area-end -->




<!-- contact-area -->
<section class="homeContact homeContact__style__two">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="{{ route('send.message') }}" method="POST">
                            @csrf

                            <input type="text" name="username" placeholder="Enter name*">
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="email" name="email" placeholder="Enter mail*">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <input type="number" name="phone_number" placeholder="Enter number*">
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <textarea name="message" placeholder="Enter Message*"></textarea>
                            @error('message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
