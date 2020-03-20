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
                <li class="active"><span>Team</span></li>
            </ol>
        </div>
        <!-- Page Header Breadcrumb End -->

        <!-- Page Header Title Start -->
        <div class="page--header-title text-uppercase text-center">
            <h2 class="h1">Our Team</h2>
        </div>
        <!-- Page Header Title End -->
    </div>
</section>
<!-- Page Header Section End -->

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


@include('frontend.components.footer');
</body>
</html>
