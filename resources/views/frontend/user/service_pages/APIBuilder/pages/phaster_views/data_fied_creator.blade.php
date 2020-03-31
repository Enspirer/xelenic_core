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

        @include('frontend.user.service_pages.APIBuilder.pages.components.lock_main_tab_menu')

        @include('frontend.user.service_pages.APIBuilder.dialogs.create_data_field')

        <div class="tab-content">
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item active"><a href="{{route('frontend.user.api_builder.dashboard',[$get_app_details->ab_id,$get_app_details->key,auth()->user()->id,$service_details->service_id])}}?#builder_table">{{$get_app_details->app_name}}</a></li>
                    <li class="breadcrumb-item active"><a href="">{{$table_details->table_name}} (Edit Table)</a></li>
                </ol>
            </nav>
            <button type="button" data-toggle="modal" data-target="#insert_data_field"  class="btn btn-primary btn-rounded">Add Field</button> <br><br>

            <div id="builder_table" class="tab-pane active">
                <section class="hk-sec-wrapper">
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Field Name</th>
                                            <th>Data Type</th>
                                            <th>Key</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($get_table_field as $field)
                                            <tr>
                                                <td>{{$field->order}}</td>
                                                <td>{{$field->field_name}}</td>
                                                <td>{{$field->type}}</td>
                                                <td>{{$field->key}}</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="{{route('frontend.user.api_builder.delete_id',[$field->data_field_id, $field->table_id])}}" data-toggle="tooltip" data-original-title="Delete"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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

    {{--<script>--}}
        {{--$(function(){--}}
            {{--var hash = window.location.hash;--}}
            {{--if(hash == '#builder_table'){--}}
                {{--$('.nav-tabs a[href="#builder_table"]').tab('show')--}}
            {{--}else {--}}
                {{--$('.nav-tabs a[href="#builder_dashboard"]').tab('show')--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
