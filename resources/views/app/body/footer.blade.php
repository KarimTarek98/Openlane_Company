@php
    $footer = App\Models\Footer::find(1);
@endphp

<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{ $footer->phone_number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $footer->contact_text }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">{{ $footer->country }}</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{ $footer->address_details }}</p>
                        <a href="mailto:karimabougom3@gmail.com" class="mail">{{ $footer->company_email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">socially connect</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{{ $footer->connect_small_desc }}</p>
                        <ul class="footer__social__list">
                            <li><a href="https://www.facebook.com/abou.gom3a/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/karim-tarek-419569164/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/karim_tarek0/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $footer->copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
