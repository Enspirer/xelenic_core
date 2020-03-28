<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item active"><a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->ab_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}">{{$get_app_details->app_name}}</a></li>
    </ol>
</nav>

@include('frontend.user.service_pages.APIBuilder.dialogs.table_create_dialog')


<div id="builder_table" class="tab-pane">
    <br><br>
    <div class="row">
        <div class="col-md-3">
            <a data-toggle="modal" data-target="#create_table_dialog" href="http://localhost:8000/cloud-service/api_builder-erts/dashboard/1/5qFsH5IJuxZlhc1hWxY5su1fjU6unGAU4k5MW8Sp/aws-gpis/1/1">
                <div class="" style="border-style: dashed;border-color: #d1d1d1;border-width: 2px;height: 223px;text-align: center;padding-top: 30px;">
                    <br><br>
                    <i class="fa fa-plus" style="font-size: 58px;text-align: center;color: #dfdfdf;"></i>
                    <p style="color:dimgrey;">Create Table</p>
                </div>
            </a>
        </div>
        @foreach($get_cloud_table as $tables)
            <div class="col-md-3">
                <a href="http://localhost:8000/cloud-service/api_builder-erts/dashboard/1/5qFsH5IJuxZlhc1hWxY5su1fjU6unGAU4k5MW8Sp/aws-gpis/1/1">
                    <div class="card" style="text-align: center;height: 220px;/* padding-top: 59px; */">
                        <br><br>
                        <div class="" style="background-image:url('http://localhost:8000/images/table_icon.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                        {{$tables->table_name}}
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>