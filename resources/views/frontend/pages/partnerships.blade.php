@include('frontend.components.head');
<body>


<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Coming Soon Section Start -->
    <div class="coming--soon--section pt--100 pb--100 bg--overlay bg--overlay-90 bg--c-main--b" data-bg-img="img/coming-soon-img/bg.jpg">
        <div class="container">
            <div class="row gutter--0">
                <div class="col-md-6 col-sm-8">
                    <!-- Coming Soon Content Start -->
                    <div class="coming--soon-content">
                        <div class="logo">
                            <img style ="height: 150px;width: 150px;" src="/FrontPage/img/logo_frame.png" alt="">
                        </div>

                        <div class="title">
                            <p>We are</p>

                            <h1 class="h1">Coming Soon</h1>
                        </div>

                        <div class="sub-title">
                            <h2 class="h4">We're currently working on creating something fantastic.</h2>
                        </div>

                        <div class="countdown" data-countdown="2019/04/25"></div>

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 widget--title text-uppercase">NewsLetter</h2>

                            <!-- Newsletter Widget Start -->
                            <div class="newsletter--widget">
                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                                    <input type="text" name="EMAIL" placeholder="Email" class="form-control" required>

                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                            <!-- Newsletter Widget End -->
                        </div>
                        <!-- Widget End -->

                        <div class="social">
                            <ul class="nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Coming Soon Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Coming Soon Section End -->
</div>
<!-- Wrapper End -->

@include('frontend.components.scripts');

</body>
</html>
