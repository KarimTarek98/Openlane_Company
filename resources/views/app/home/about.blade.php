@php
    $about = App\Models\About::find(1);
    $icons = App\Models\AboutMultiIcons::get();
@endphp

<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach ($icons as $icon)

                    <li>
                        <img class="light" src="{{ asset($icon->multi_icons) }}" alt="XD">
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About Us</span>
                        <h2 class="title">{{ $about->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $about->exp_content }}</p>
                        </div>
                    </div>
                    <p class="desc">{!! $about->desc !!}</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
