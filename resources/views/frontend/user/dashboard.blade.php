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
                <div class="col-xl-4">
                    <div class="card card-lg">
                        <div class="card-body">
                            <h4>{{ xelenic_settings('appple') }}</h4> <br>
                            <p>You received this message because you are subscribed to the Google Groups "Slax users" group.
                                To unsubscribe from this group and stop receiving emails from it, send an email to
                                slax-users+unsubscribe@googlegroups.com. To view this discussion on the web
                                visit https://groups.google.com/d/msgid/slax-users
                                /7018382b-f451-4a2f-8695-eba4874efc11%40googlegroups.com
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        @include('frontend.user.dashboard_components.footer')