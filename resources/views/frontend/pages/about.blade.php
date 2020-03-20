
@include('frontend.components.head');
<body>
@include('frontend.components.header');


    <!-- Page Header Section Start -->
    <section class="page--header--section pt--130 pb--150 bg--overlay" data-bg-img="/Pages/img/page-header-img/bg.jpg">
        <div class="container">
            <!-- Page Header Breadcrumb Start -->
            <div class="page--header-breadcrumb text-uppercase text-center">
                <ol class="breadcrumb">
                    <li><a href="index.html" class="btn-link">Home</a></li>
                    <li class="active"><span>About</span></li>
                </ol>
            </div>
            <!-- Page Header Breadcrumb End -->

            <!-- Page Header Title Start -->
            <div class="page--header-title text-uppercase text-center">
                <h2 class="h1">About CloudSky</h2>
            </div>
            <!-- Page Header Title End -->
        </div>
    </section>
    <!-- Page Header Section End -->

    <!-- Page Content Section Start -->
    <section class="page--content--section pt--80 pb--20">
        <div class="container">
            <div class="row row--vc-md">
                <div class="col-md-5 col-sm-6 pb--60">
                    <!-- Page Content Image Start -->
                    <div class="page--content-img" data-scroll-reveal="left">
                        <img src="/Pages/img/about-img/01.jpg" alt="">
                    </div>
                    <!-- Page Content Image End -->
                </div>

                <div class="col-md-7 col-sm-6 pb--60">
                    <!-- Page Content Inner Start -->
                    <div class="page--content-inner" data-scroll-reveal="right">
                        <div class="title">
                            <h2 class="h1">Why Choose Us</h2>
                        </div>

                        <div class="sub-title">
                            <h3 class="h3">Few Company Information</h3>
                        </div>

                        <div class="desc">
                            <h4>Our Mission</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="desc">
                            <h4>Our Vission</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="desc">
                            <h4>Our Strategy</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <!-- Page Content Inner End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Page Content Section End -->

    <!-- Team Section Start -->
    <section class="team--section pt--80 pb--80 bg--c-lighterblue">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--50 text-center">
                <h2 class="h1 text-uppercase">Meet Our Team Members</h2>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Team Members Start -->
            <div class="team--members owl-carousel" data-owl-margin="30" data-owl-nav="true" data-owl-responsive='{"0": {"items": "1"}, "481": {"items": "2"}, "992": {"items": "3"}}'>
                <!-- Team Member Start -->
                <div class="team--member text-center">
                    <div class="img">
                        <img src="/Pages/img/team-img/member-01.jpg" alt="" class="img-circle">
                    </div>

                    <div class="name text-uppercase">
                        <h3 class="h4">Jeffrey Stevens</h3>
                    </div>

                    <div class="role">
                        <p>Founder</p>
                    </div>

                    <div class="social">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member End -->

                <!-- Team Member Start -->
                <div class="team--member text-center">
                    <div class="img">
                        <img src="/Pages/img/team-img/member-02.jpg" alt="" class="img-circle">
                    </div>

                    <div class="name text-uppercase">
                        <h3 class="h4">Harold Crawford</h3>
                    </div>

                    <div class="role">
                        <p>Sales</p>
                    </div>

                    <div class="social">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member End -->

                <!-- Team Member Start -->
                <div class="team--member text-center">
                    <div class="img">
                        <img src="/Pages/img/team-img/member-03.jpg" alt="" class="img-circle">
                    </div>

                    <div class="name text-uppercase">
                        <h3 class="h4">Jack Lopez</h3>
                    </div>

                    <div class="role">
                        <p>Manager</p>
                    </div>

                    <div class="social">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member End -->

                <!-- Team Member Start -->
                <div class="team--member text-center">
                    <div class="img">
                        <img src="/Pages/img/team-img/member-04.jpg" alt="" class="img-circle">
                    </div>

                    <div class="name text-uppercase">
                        <h3 class="h4">Larry Hall</h3>
                    </div>

                    <div class="role">
                        <p>Support</p>
                    </div>

                    <div class="social">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member End -->
            </div>
            <!-- Team Members End -->
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Counter Section Start -->
    <section class="counter--section pt--80 pb--50 bg--overlay" data-bg-img="/Pages/img/counter-img/bg.jpg">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Counter Item Start -->
                    <div class="counter--item style--1">
                        <div class="img">
                            <img src="/Pages/img/counter-img/icon-01.png" alt="">
                        </div>

                        <div class="title">
                            <h2 class="h4">Happy Costomers</h2>
                        </div>

                        <div class="count">
                            <h3 class="h1"><span data-trigger="counterUp">302</span>+</h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Counter Item Start -->
                    <div class="counter--item style--1">
                        <div class="img">
                            <img src="/Pages/img/counter-img/icon-02.png" alt="">
                        </div>

                        <div class="title">
                            <h2 class="h4">Hosting Servers Sold</h2>
                        </div>

                        <div class="count">
                            <h3 class="h1"><span data-trigger="counterUp">502</span>+</h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Counter Item Start -->
                    <div class="counter--item style--1">
                        <div class="img">
                            <img src="/Pages/img/counter-img/icon-03.png" alt="">
                        </div>

                        <div class="title">
                            <h2 class="h4">Our Data Center</h2>
                        </div>

                        <div class="count">
                            <h3 class="h1"><span data-trigger="counterUp">150</span>+</h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Counter Item Start -->
                    <div class="counter--item style--1">
                        <div class="img">
                            <img src="/Pages/img/counter-img/icon-04.png" alt="">
                        </div>

                        <div class="title">
                            <h2 class="h4">Team Members</h2>
                        </div>

                        <div class="count">
                            <h3 class="h1"><span data-trigger="counterUp">690</span>+</h3>
                        </div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonials--section pt--70 pb--70">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--50 text-center">
                <h2 class="h1 text-uppercase">Customer's Feedback</h2>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial--slider owl-carousel" data-owl-dots="true" data-owl-margin="30" data-owl-speed="2000">
                        <!-- Testimonial Item Start -->
                        <div class="testimonial--item">
                            <div class="content text-center">
                                <div class="img">
                                    <img src="/Pages/img/testimonial-img/client-01.jpg" alt="">
                                </div>

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                </blockquote>
                            </div>

                            <div class="name">
                                <p>Maria Doe</p>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->

                        <!-- Testimonial Item Start -->
                        <div class="testimonial--item">
                            <div class="content text-center">
                                <div class="img">
                                    <img src="/Pages/img/testimonial-img/client-02.jpg" alt="">
                                </div>

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                </blockquote>
                            </div>

                            <div class="name">
                                <p>Alan Palmer</p>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->

                        <!-- Testimonial Item Start -->
                        <div class="testimonial--item">
                            <div class="content text-center">
                                <div class="img">
                                    <img src="/Pages/img/testimonial-img/client-03.jpg" alt="">
                                </div>

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuovod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitation.</p>
                                </blockquote>
                            </div>

                            <div class="name">
                                <p>Nicole Morrison</p>
                            </div>
                        </div>
                        <!-- Testimonial Item End -->
                    </div>
                    <!-- Testimonial Slider Start -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Call To Action Start -->
    <section class="call-to-action pt--50 pb--50 bg--c-main">
        <div class="container">
            <!-- Call To Action Content Start -->
            <div class="cta--content text-center">
                <div class="title">
                    <h2 class="h3">Choose the best Managed Cloud Hosting experience for your business!</h2>
                </div>

                <div class="action">
                    <a href="#" class="btn btn-lg btn-primary">Get Started Now<i class="ml--8 fa fa-check-circle"></i></a>
                </div>

                <div class="note text-uppercase">
                    <p><small>Vorem ipsum dolor sit amet</small></p>
                </div>
            </div>
            <!-- Call To Action Content End -->
        </div>
    </section>
    <!-- Call To Action End -->

    <!-- FAQ Section Start -->
    <section class="faq--section pt--80 pb--20">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--50 text-center">
                <h2 class="h1 text-uppercase">Here are some common questions about CloudSky</h2>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="row row--vc-md">
                <div class="col-md-6 pb--60">
                    <!-- FAQ Image Start -->
                    <div class="faq--img" data-scroll-reveal="left">
                        <img src="/Pages/img/faq-img/01.jpg" alt="" class="center-block">
                    </div>
                    <!-- FAQ Image End -->
                </div>

                <div class="col-md-6 pb--60">
                    <!-- FAQ Items Start -->
                    <div class="faq--items panel-group" id="faqItems01" data-scroll-reveal="right">
                        <!-- FAQ Item End -->
                        <div class="faq--item panel">
                            <div class="panel-heading">
                                <h3 class="h4">
                                    <a href="#faqItems01_1" data-toggle="collapse" data-parent="#faqItems01">
                                        <i class="fa fa-cloud"></i>
                                        <span>What is bandwidth and how much do you need?</span>
                                    </a>
                                </h3>
                            </div>

                            <div id="faqItems01_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item End -->
                        <div class="faq--item panel">
                            <div class="panel-heading">
                                <h3 class="h4">
                                    <a href="#faqItems01_2" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                        <i class="fa fa-database"></i>
                                        <span>What is SSL security?</span>
                                    </a>
                                </h3>
                            </div>

                            <div id="faqItems01_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item End -->
                        <div class="faq--item panel">
                            <div class="panel-heading">
                                <h3 class="h4">
                                    <a href="#faqItems01_3" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                        <i class="fa fa-server"></i>
                                        <span>What is shared web hosting?</span>
                                    </a>
                                </h3>
                            </div>

                            <div id="faqItems01_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item End -->
                        <div class="faq--item panel">
                            <div class="panel-heading">
                                <h3 class="h4">
                                    <a href="#faqItems01_4" class="collapsed" data-toggle="collapse" data-parent="#faqItems01">
                                        <i class="fa fa-lock"></i>
                                        <span>Is my website protected from hackers?</span>
                                    </a>
                                </h3>
                            </div>

                            <div id="faqItems01_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Items End -->
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->

    <!-- Clients Section Start -->
    <section class="clients--section pt--70 pb--50 section--divider-top">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section--title pb--50 text-center">
                <h2 class="h1 text-uppercase">We Work With</h2>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="row" data-scroll-reveal="group">
                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-01.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-02.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-03.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-04.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-05.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-06.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-07.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xss-12 pb--30">
                    <!-- Client Brand Start -->
                    <div class="client--brand">
                        <img src="/Pages/img/client-img/client-brand-08.png" alt="">
                    </div>
                    <!-- Client Brand End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->

    <!-- Footer Section Start -->
    <footer class="footer--section" data-bg-img="/Pages/img/footer-img/footer-widget-bg.jpg">
        <!-- Footer Widgets Start -->
        <div class="footer--widgets pt--90 pb--30">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- About Widget Start -->
                            <div class="about--widget">
                                <div class="logo">
                                    <img src="/Pages/img/logo.png" alt="">
                                </div>

                                <address>
                                    <p>52 Shewrapara, Ibrahimpur, Mirpur 2653, Dhaka.</p>
                                </address>

                                <dl>
                                    <dt><i class="fa fa-envelope-o"></i>Email</dt>
                                    <dd>
                                        <p>
                                            <span>Sales:</span>
                                            <a href="mailto:sales@example.com" class="btn-link">sales@example.com</a>
                                        </p>
                                        <p>
                                            <span>Support:</span>
                                            <a href="mailto:support@example.com" class="btn-link">support@example.com</a>
                                        </p>
                                    </dd>
                                </dl>

                                <dl>
                                    <dt><i class="fa fa-phone"></i>Phone</dt>
                                    <dd>
                                        <p>
                                            <span>Sales:</span>
                                            <a href="tel:00123412345" class="btn-link">001 234 12345</a>
                                        </p>
                                        <p>
                                            <span>Support:</span>
                                            <a href="tel:00123412345" class="btn-link">001 234 12345</a>
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                            <!-- About Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 widget--title text-uppercase">Resources</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#">Hosting</a></li>
                                    <li><a href="#">Dedicated Hosting</a></li>
                                    <li><a href="#">VPS Hosting</a></li>
                                    <li><a href="#">Professional Services</a></li>
                                    <li><a href="#">Reseller Hosting</a></li>
                                    <li><a href="#">Cloud Hosting</a></li>
                                    <li><a href="#">System Status</a></li>
                                    <li><a href="#">Referral System</a></li>
                                    <li><a href="#">Forum</a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 widget--title text-uppercase">Quick Links</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Cloud Hosting</a></li>
                                    <li><a href="#">Logos &amp; Banners</a></li>
                                    <li><a href="#">Cloud Hosting</a></li>
                                    <li><a href="#">Reseller Hosting</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 widget--title text-uppercase">NewsLetter</h2>

                            <!-- Newsletter Widget Start -->
                            <div class="newsletter--widget">
                                <div class="desc">
                                    <p>Dolor sit amet consectetur adipisicing elit sed do tempor ut labore</p>
                                </div>

                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                                    <input type="text" name="EMAIL" placeholder="Email" class="form-control" required>

                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                            <!-- Newsletter Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 widget--title text-uppercase">Payment Methods</h2>

                            <!-- Image Widget Start -->
                            <div class="img---widget">
                                <img src="/Pages/img/footer-img/payment-methods.png" alt="">
                            </div>
                            <!-- Image Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widgets End -->

        <!-- Footer Copyright Start -->
        <div class="footer--copyright pt--30 pb--30">
            <div class="container">
                <ul class="social nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>

                <p class="copyright--text">Copyright 2018 &copy; <a href="#">CloudSky</a>. All Rights Reserved.</p>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer Section End -->
</div>
<!-- Wrapper End -->

<!-- Login Form Start -->
<div id="loginForm" class="login--form modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>

            <div class="modal-body">
                <div class="title">
                    <h2 class="h4">Login</h2>
                </div>

                <form action="http://billing.ywhmcs.com/dologin.php" data-form="validate">
                    <div class="form-group">
                        <input type="email" name="username" placeholder="Your Email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>

                    <input type="hidden" name="systpl" value="CloudSky">

                    <p class="help-block"><a href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudSky">Forgot Your Password?</a></p>

                    <button type="submit" class="btn btn-block btn-default text-uppercase">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Login Form End -->

<!-- Cookie Notification Start -->
<div id="cookieNotify" class="hidden">
    <div class="alert bg--c-darkgray--b">
        <button class="close" data-dismiss="alert">&times;</button>

        <div class="container">
            <button data-dismiss="alert" class="btn btn-sm btn-primary float--right">GOT IT!</button>
            <p>This is a sample cookie notification bar.</p>
        </div>
    </div>
</div>
<!-- Cookie Notification End -->

<!-- Back To Top Button Start -->
<div id="backToTop">
    <a href="#" class="btn btn-lg btn-default active"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Back To Top Button End -->



</body>
</html>

@include('frontend.components.footer');
</body>
</html>
