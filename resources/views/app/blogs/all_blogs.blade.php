@extends('app.main_master')

@section('css')
<link rel="stylesheet" href="" />
@endsection

@section('title')
All Blogs | Openlane Company
@endsection

@php


@endphp

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">All Blogs</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->


<!-- blog-area -->
<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @foreach ($blogs as $blog)
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="{{ route('blog.details', $blog->id) }}"><img src="{{ asset($blog->blog_image) }}" width="850" height="430" alt=""></a>
                        <a href="{{ route('blog.details', $blog->id) }}" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>
                            <span class="post__by">By : <a href="#">Halina Spond</a></span>
                        </div>
                        <h2 class="title"><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a></h2>
                        <p>{!! Str::limit($blog->blog_description, 200) !!}</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach



                <div class="pagination-wrap">
                    {{ $blogs->links('vendor.pagination.blogs') }}
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog__sidebar">
                    <div class="widget">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Recent Blog</h4>
                        <ul class="rc__post">

                            @foreach ($allBlogs as $blog)
                            <li class="rc__post__item">
                                <div class="rc__post__thumb">
                                    <a href="{{ route('blog.details', $blog->id) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
                                </div>
                                <div class="rc__post__content">
                                    <h5 class="title"><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a></h5>
                                    <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="sidebar__cat">
                            @foreach ($categories as $category)
                            <li class="sidebar__cat__item"><a href="{{ route('category.blogs', $category->id) }}">{{ $category->blog_category }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->


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
<!-- contact-area-end -->

@endsection
