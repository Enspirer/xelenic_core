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
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.cloud_services')}}">Cloud Services</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20">

        <div class="row">
            @foreach($get_services as $get_service)
                <div class="col-xl-4">
                    <div class="card card-lg">
                        <div style="background-image: url('storage/service_img/{{$get_service->cover_image}}');height: 140px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                        <div class="card-body">
                            <h4>{{$get_service->service_name}}</h4> <br>
                            <p style="overflow: hidden;height: 190px;">
                                {{$get_service->service_description}}
                            </p> <br>
                            <a href="" class="btn btn-primary btn-rounded pull-right">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@include('frontend.user.dashboard_components.footer')