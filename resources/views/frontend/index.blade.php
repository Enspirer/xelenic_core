
@include('frontend.components.head')
<body>
@include('frontend.components.header')


@if(xelenic_settings('banner_section') == 'true')
    @include('frontend.components.banner')
@elseif(xelenic_settings('banner_section') == 'false')

@else

@endif


@if(xelenic_settings('homepage_partner_logo_section') == 'true')
    @include('frontend.components.partner_logo')
@elseif(xelenic_settings('homepage_partner_logo_section') == 'false')

@else

@endif


@if(xelenic_settings('homepage_partner_logo_section') == 'true')
    @include('frontend.components.partner_logo')
@elseif(xelenic_settings('homepage_partner_logo_section') == 'false')

@else

@endif







<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Some Features that Made us Unique</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->

<!-- Start info Area -->
<section class="info-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-5">
                <h1 class="text-white">From the root <br>
                    of experience We dig <br>
                    out the best talent</h1>
                <p class="pt-20 pb-20">
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Get Customer Support</a>
            </div>
        </div>
    </div>
</section>
<!-- End info Area -->


<!-- Start faq Area -->
<section class="faq-area section-gap" id="faq">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Features That make us Unique</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="counter-left col-lg-3 col-md-3">
                <div class="single-facts">
                    <h2 class="counter">5962</h2>
                    <p>Projects Completed</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">2394</h2>
                    <p>New Projects</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">1439</h2>
                    <p>Tickets Submitted</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">933</h2>
                    <p>Cup of Coffee</p>
                </div>
            </div>
            <div class="faq-content col-lg-9 col-md-9">
                <div class="single-faq">
                    <h2>
                        Are your Templates responsive?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Does it have all the plugin as mentioned?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Can i use the these theme for my client?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End faq Area -->

@if(xelenic_settings('homepage_custom_solution_section') == 'true')
    @include('frontend.components.custom_solution')
@elseif(xelenic_settings('homepage_custom_solution_section') == 'true')

@else

@endif


<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-30 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Contact Us</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <form class="form-area mt-60" id="myForm" action="mail.php" method="post" class="contact-form text-right">
            <div class="row">
                <div class="col-lg-6 form-group">
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                </div>
                <div class="col-lg-6 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                    <div class="mt-10 alert-msg">
                    </div>
                </div></div>
        </form>

    </div>
</section>
<!-- end contact Area -->




@include('frontend.components.footer')
@include('frontend.components.scripts')
</body>
</html>



