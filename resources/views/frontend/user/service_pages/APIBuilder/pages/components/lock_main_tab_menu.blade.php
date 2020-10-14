<div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">
    <div class="bg-white shadow-bottom">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}" class="d-flex h-60p align-items-center nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}/#api_log" class="d-flex h-60p align-items-center nav-link active">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="d-flex h-60p align-items-center nav-link"  onclick="location_changer('api_logs')"  href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}/#api_log">API Logs</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}/#builder_api_endpoints" class="d-flex h-60p align-items-center nav-link">Endpoints</a>
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
