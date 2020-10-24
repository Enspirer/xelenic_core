@auth

    @include('frontend.user.dashboard_components.header')

    <!-- Top Navbar -->
    @include('frontend.user.dashboard_components.top_navbar')
    @include('frontend.user.dashboard_components.search_box')

    <!-- /Top Navbar -->
    <!-- Vertical Nav -->
    @include('frontend.user.dashboard_components.sidebar')

    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>

    @include('frontend.user.dashboard_components.settings_panel')
    <title>Service Error</title>

    <div class="hk-pg-wrapper">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <div class="row">
                <div class="col-xl-12"><br><br>
                    <div class="card card-lg" style="text-align: center;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="" style="background: url('{{url('/')}}/images/service_error.png');height:300px;background-position: center;background-repeat: no-repeat;">

                                    </div>

                                </div>
                                <div class="col-md-6" style="text-align: left;">
                                    <h3 style="text-align: left">Problem with your service,</h3><br>
                                    <p style="text-align: left">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic typesetting,
                                    </p><br>
                                    <a href="" class="btn btn-primary" style="text-align: left">Report this problem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.user.dashboard_components.footer')
@else

    @include('frontend.components.head')
    <body>
    @include('frontend.components.header')

    <div class="row">
        <div class="col-md-12">
            <div class="container"><br><br>
                <div class="card" style="margin-top: 60px;padding: 10px;">
                    <div class="container">
                        <h2>That Service not working</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s</p>
                        <h3>Report that problem</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s</p>
                        <h3>Line Stage Down</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,printing and typesetting industry.Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s</p>

                        <a href="" class="btn btn-primary">Report this problem</a>
                    </div>
                </div>

            </div>

        </div>
    </div>



    @include('frontend.components.scripts')
    </body>
    </html>

@endauth

