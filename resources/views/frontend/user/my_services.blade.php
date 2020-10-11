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
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="row">
            @if(!$get_services->isEmpty())
                @foreach($get_services as $get_service)
                    <div class="col-xl-4">
                        <div class="card card-lg">
                            <div style="background-image: url('{{url('/')}}/storage/service_img/{{$get_service->cover_image}}');height: 63px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                            <div class="card-body">
                                <h4>{{$get_service->service_name}}</h4> <br>
                                <p style="overflow: hidden;height: 68px;font-size: 12px;">
                                    {{$get_service->service_description}}
                                </p> <br>
                                <div class="" style="text-align: left">
                                    <p ><b>Running Service:</b> {{$get_service->intence_count}}</p>
                                    <p><b>API Key:</b> {{$get_service->token}}</p>
                                </div><br>

                                <a href="{{route('frontend.user.my_service.open_service',[$get_service->service_id,$get_service->token])}}" class="btn btn-primary btn-rounded pull-right">Open Service</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h2 style="text-align: center;color: grey;">My Data Empty</h2><br>
                    <p style="text-align: center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>

                    <div class="" style="background-image: url('{{url('/')}}/images/mydataempy.jpg');height: 340px;background-repeat: no-repeat;background-position: center;background-size: contain;">
                   <br>
                </div>
            @endif




        </div>

    </div>

@include('frontend.user.dashboard_components.footer')