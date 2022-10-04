<section class="homeContact">
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
