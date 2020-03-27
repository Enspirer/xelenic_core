@include('frontend.user.dashboard_components.header')

<!-- Top Navbar -->
@include('frontend.user.dashboard_components.top_navbar')
@include('frontend.user.dashboard_components.search_box')

<!-- /Top Navbar -->

<!-- Vertical Nav -->
@include('frontend.user.dashboard_components.sidebar')

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->


<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
            <li class="breadcrumb-item"><a href="{{route('frontend.user.my_service.open_service',[$service_details->service_id,$service_details->token])}}">{{$service_details->service_name}}</a></li>
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->ab_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}">{{$get_app_details->app_name}}</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">
        <div class="bg-white shadow-bottom">
            <div class="container-fluid px-xxl-65 px-xl-20">
                <ul class="nav nav-light nav-tabs" role="tablist">
                    <li class="nav-item active">
                        <a data-toggle="tab" href="#builder_dashboard" class="d-flex h-60p align-items-center nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#builder_table" class="d-flex h-60p align-items-center nav-link">Tables</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#builder_api_logs" class="d-flex h-60p align-items-center nav-link">API Logs</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#builder_api_endpoints" class="d-flex h-60p align-items-center nav-link">Endpoints</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#builder_api_records" class="d-flex h-60p align-items-center nav-link">Records</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#builder_settings" class="d-flex h-60p align-items-center nav-link">Settings</a>
                    </li>
                </ul>
            </div>
        </div>


            <div class="tab-content">
                @include('frontend.user.service_pages.APIBuilder.pages.components.builder_dashboard')
                @include('frontend.user.service_pages.APIBuilder.pages.components.table_creator')
            </div>
        </div>


@include('frontend.user.dashboard_components.footer')