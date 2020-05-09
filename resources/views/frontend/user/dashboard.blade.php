    @include('frontend.user.dashboard_components.header')

    <!-- Top Navbar -->
    @include('frontend.user.dashboard_components.top_navbar')
    @include('frontend.user.dashboard_components.search_box')

    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    @include('frontend.user.dashboard_components.sidebar')

    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

   @include('frontend.user.dashboard_components.settings_panel')

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Activity</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Container -->

        <div class="container-fluid px-xxl-65 px-xl-20">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-lg" style="background: #f9f9f9;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="" style="background: url('{{url('/')}}/images/create_website.jpg');height: 250px;background-size: contain;background-repeat: no-repeat;background-position: center;"></div>
                                </div>
                                <div class="col-md-8" style="text-align: left;">
                                    <h3>Welcome to Thingerbits</h3><br>
                                    <p style="font-size: 18px;">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('frontend.user.dashboard_components.footer')