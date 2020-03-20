
@include('frontend.components.head');
<body>
@include('frontend.components.header');


    <!-- Page Header Section Start -->
    {{--<section class="page--header--section pt--130 pb--150 bg--overlay" data-bg-img="/Pages/img/page-header-img/bg.jpg">--}}
        {{--<div class="container">--}}
            {{--<!-- Page Header Breadcrumb Start -->--}}
            {{--<div class="page--header-breadcrumb text-uppercase text-center">--}}
                {{--<ol class="breadcrumb">--}}
                    {{--<li><a href="index.html" class="btn-link">Home</a></li>--}}
                    {{--<li class="active"><span>About</span></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
            {{--<!-- Page Header Breadcrumb End -->--}}

            {{--<!-- Page Header Title Start -->--}}
            {{--<div class="page--header-title text-uppercase text-center">--}}
                {{--<h2 class="h1">About CloudSky</h2>--}}
            {{--</div>--}}
            {{--<!-- Page Header Title End -->--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Page Header Section End -->

    <!-- Page Content Section Start -->
    <section class="page--content--section pt--80 pb--20" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page--content-img" data-scroll-reveal="left">
                        <div class="" style="background-image: url('images/about_side_img.png');height: 300px;background-size: contain;background-repeat: no-repeat;background-position: center;filter: hue-rotate(-55deg);opacity: 90%;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page--content-inner" data-scroll-reveal="right">
                        <div class="title">
                            <h2 class="h1">About us</h2>
                        </div> <br><br>

                         <br>
                        <div class="desc">
                            <h4>Our Mission and Vision</h4><br>

                            <p>
                                Our mission is to help enterprises accelerate adoption of new technologies,
                                untangle complex issues that always emerge during digital evolution, and orchestrate ongoing innovation.
                                Whether it is a consumer-oriented app or a transformative enterprise-class solution, the company
                                leads the process from ideation and concept to delivery, and provides ongoing support through its IS360 framework.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section> <br><br>
    <!-- Page Content Section End -->

    <!-- Team Section Start -->

    <!-- Team Section End -->

    <!-- Counter Section Start -->

    <!-- Clients Section End -->

@include('frontend.components.footer');
</body>
</html>
