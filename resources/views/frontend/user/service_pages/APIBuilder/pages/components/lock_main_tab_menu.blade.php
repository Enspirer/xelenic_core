<div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">
    <div class="bg-white shadow-bottom">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->ab_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}" class="d-flex h-60p align-items-center nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab"  onclick="location_changer('builder_table')" href="#builder_table" class="d-flex h-60p align-items-center nav-link active">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="d-flex h-60p align-items-center nav-link">API Logs</a>
                </li>
                <li class="nav-item">
                    <a href="#builder_api_endpoints" class="d-flex h-60p align-items-center nav-link">Endpoints</a>
                </li>
                <li class="nav-item">
                    <a  href="#builder_api_records" class="d-flex h-60p align-items-center nav-link">Records</a>
                </li>
                <li class="nav-item">
                    <a href="#builder_settings" class="d-flex h-60p align-items-center nav-link">Settings</a>
                </li>
            </ul>
        </div>
    </div>
