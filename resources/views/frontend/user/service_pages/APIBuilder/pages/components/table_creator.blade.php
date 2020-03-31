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
                        <div class="btn-group pull-right">
                            <div class="dropdown">
                                <a aria-expanded="false" data-toggle="dropdown" class="btn btn-link dropdown-toggle btn-icon-dropdown">
                                    <i class="fa fa-list"></i><br>
                                </a>

                                <div role="menu" class="dropdown-menu" style="will-change: transform;">
                                    <a class="dropdown-item" href="{{route('frontend.user.view_data_entry',[$tables->table_id,$tables->key,$service_details->service_id,$get_app_details->ab_id])}}">View Data Entry</a>
                                    <a class="dropdown-item" href="{{route('frontend.user.table_edit_page',[$tables->table_id,$tables->key,$service_details->service_id,$get_app_details->ab_id])}}">Edit Table</a>
                                    <a class="dropdown-item" href="">End Points</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dark" href="{{route('frontend.user.api_builder.delete_table_permenent',$tables->table_id)}}" style="color: red;">Permanent Delete</a>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="" style="background-image:url('http://localhost:8000/images/table_icon.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                        <div class="container">
                            <p> {{$tables->table_name}} </p>
                        </div><br>

                        <div class="card-footer">
                            <div class="" style="font-size: 10px;text-align: left"><b>Key:</b> {{$tables->key}}</div>

                        </div>

                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>