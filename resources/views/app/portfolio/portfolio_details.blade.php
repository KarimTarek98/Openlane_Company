@extends('app.main_master')

@section('css')
<link rel="stylesheet" href="" />
@endsection

@section('title')
Home | Openlane Company
@endsection

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $portfolio->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->name }}</li>
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

    <!-- portfolio-details-area -->
    <section class="services__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="services__details__thumb">
                        <img src="{{ asset($portfolio->image) }}" alt="">
                    </div>
                    <div class="services__details__content">
                        <h2 class="title">{{ $portfolio->title }}</h2>
                        <p>{!! $portfolio->description !!}</p>
                        <div class="services__details__img">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="assets/img/images/services_details02.jpg" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img src="assets/img/images/services_details03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <h2 class="small-title">Nature of Business Strategy</h2>
                        <p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company’s market position and overall performance and reactions to unexpected developments and new market.</p>
                        <p>The maximum part of the company’s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="services__sidebar">
                        <div class="widget">
                            <h5 class="title">Get in Touch</h5>
                            <form action="#" class="sidebar__contact">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter your mail*">
                                <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                <button type="submit" class="btn">send massage</button>
                            </form>
                        </div>
                        <div class="widget">
                            <h5 class="title">Project Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span>Date :</span> January, 2021</li>
                                <li><span>Location :</span> East Meadow NY 11554</li>
                                <li><span>Client :</span> American</li>
                                <li class="cagegory"><span>Category :</span>
                                    {{ $portfolio->name }}
                                </li>
                                <li><span>Project Link :</span> <a href="portfolio-details.html">https://www.yournews.com/</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="title">Contact Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span>Address :</span> 8638 Amarica Stranfod, <br> Mailbon Star</li>
                                <li><span>Mail :</span> yourmail@gmail.com</li>
                                <li><span>Phone :</span> +7464 0187 3535 645</li>
                                <li><span>Fax id :</span> +9 659459 49594</li>
                            </ul>
                            <ul class="sidebar__contact__social">
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details-area-end -->


    <!-- contact-area -->
    <section class="homeContact homeContact__style__two">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
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
    <!-- contact-area-end -->{{ asset('frontend/') }}

@endsection

