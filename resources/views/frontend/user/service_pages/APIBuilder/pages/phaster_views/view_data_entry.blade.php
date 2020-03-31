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
                <li class="breadcrumb-item active"><a href="">{{$table_details->table_name}} View Data Entry </a></li>
            </ol>
        </nav>
        <button type="button" data-toggle="modal" data-target="#insert_data_field"  class="btn btn-primary btn-rounded">Add Field</button> <br><br>

        <div id="builder_table" class="tab-pane active">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div id="datable_1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datable_1_length">
                                            <label>
                                                <select name="datable_1_length" aria-controls="datable_1" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>items
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6"><div id="datable_1_filter" class="dataTables_filter">
                                            <label>
                                                <input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="datable_1">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30 dataTable dtr-inline" role="grid" aria-describedby="datable_1_info">
                                            <thead>
                                                <tr role="row">
                                                    @foreach($get_table_field as $table_field)
                                                        <th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"><b style="font-weight: 600;">{{$table_field->field_name}}</b></th>
                                                    @endforeach
                                                    {{--<th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Position</th>--}}
                                                    {{--<th class="sorting_desc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" aria-sort="descending">Office</th>--}}
                                                    {{--<th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th>--}}
                                                    {{--<th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Start date</th>--}}
                                                    {{--<th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Salary</th>--}}
                                                    {{----}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td class="sorting_1">Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
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
