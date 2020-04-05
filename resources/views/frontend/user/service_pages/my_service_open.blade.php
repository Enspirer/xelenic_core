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
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.my_service.open_service',[$service_details->service_id,$service_details->token])}}">{{$service_details->service_name}}</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="row">

            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">{{$service_details->service_name}}</h5>
                    <p class="mb-30">Use border utilities to add an element’s borders. Choose from all borders or one at a time.</p>

                    @include('frontend.user.service_pages.service_page')

                </section>
            </div>
        </div>

    </div>

@include('frontend.user.dashboard_components.footer')
    <script>
        function location_changer(hash_code) {
            location.hash = hash_code;
        }

    </script>

    <script>
        $(function(){
            var hash = window.location.hash;
            if(hash == '#canvas'){
                $('.nav-tabs a[href="#canvas"]').tab('show')
            }else {
                $('.nav-tabs a[href="#settings_authfactor"]').tab('show')
            }
        });
    </script>