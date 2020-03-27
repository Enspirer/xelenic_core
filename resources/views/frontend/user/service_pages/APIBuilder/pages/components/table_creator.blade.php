<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item active"><a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->ab_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}">{{$get_app_details->app_name}}</a></li>
    </ol>
</nav>


<div id="builder_table" class="tab-pane">
    <br><br>
    <div class="row">
        <div class="col-md-3">
            <a href="http://localhost:8000/cloud-service/api_builder-erts/dashboard/1/5qFsH5IJuxZlhc1hWxY5su1fjU6unGAU4k5MW8Sp/aws-gpis/1/1">
                <div class="card" style="text-align: center;height: 220px;/* padding-top: 59px; */">
                    <br><br>
                    <div class="" style="background-image:url('http://localhost:8000/images/table_icon.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                    Thingerbits
                </div>
            </a>
        </div>
    </div>
</div>