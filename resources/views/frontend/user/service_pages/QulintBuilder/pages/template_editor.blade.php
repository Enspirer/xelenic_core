@include('frontend.user.dashboard_components.header')

<!-- Top Navbar -->
@include('frontend.user.dashboard_components.top_navbar')
@include('frontend.user.dashboard_components.search_box')

<!-- /Top Navbar -->

<!-- Vertical Nav -->
@include('frontend.user.dashboard_components.sidebar')

@include('frontend.user.service_pages.QulintBuilder.dialogs.template_header_settings')

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->



<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.open_service',[$get_service_details->service_id,$get_service_details->token])}}">Qulint Builder</a></li>
            <li class="breadcrumb-item "><a href="#">Edit Template</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="card">
            <div style="padding: 15px;">
                <button class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </button>
                <button class="btn btn-primary">
                    <i class="fa fa-book"></i>
                </button>
                <button class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div style="margin: 50px;">
                <div class="" style="height: 60px;border-color: #bdbdbd;border-width: 2px;padding: 10px;background: #4d90fe;color: white;margin-bottom: 6px;">
                    Header Settings
                    <button data-toggle="modal" data-target="#template_header_settings" class="btn btn-light pull-right" style="margin-right: 5px;"><i class="fa fa-edit"></i> Settings </button>
                    <button class="btn btn-light pull-right" style="margin-right: 5px;"><i class="ion ion-md-outlet"></i> Add Script </button>

                </div>

                <div class="" style="border-style: dashed;border-color: #bdbdbd;height: 200px;border-width: 2px;margin-bottom: 10px;padding: 10px;">
                    HTML Body
                </div>
                <div class="" style="height: 60px;border-color: #bdbdbd;border-width: 2px;padding: 10px;background: #4d90fe;color: white;margin-bottom: 6px;">
                    Footer Settings <button class="btn btn-light pull-right"><i class="fa fa-edit"></i> </button>
                </div>

            </div>

        </div>

    </div>


</div>


@include('frontend.user.dashboard_components.footer')
























