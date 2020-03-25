@if ($service_details->service_id == 1)
    @include('frontend.user.service_pages.APIBuilder.dialogs.create_app')
    <div class="bg-white shadow-bottom">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item active">
                    <a data-toggle="tab" href="#menu1" class="d-flex h-60p align-items-center nav-link active">Active App</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#menu2" class="d-flex h-60p align-items-center nav-link">Draft App ({{count($service_manager['get_unpublished_app'])}})</a>
                </li>
            </ul>
        </div>
    </div> <br><br>

    <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active show">
            <div class="row">
                <div class="col-md-3">
                    <div style="border-radius: 5px;height: 220px;border-width: 1px;border-style: dashed;padding: 10px;border-color: #c8c8c8;text-align: center;" data-toggle="modal" data-target=".bd-example-modal-lg">OpenScrime</div>
                </div>
                @foreach($service_manager['get_published_app'] as $service_manager_r)
                    <div class="col-md-3">
                        <div class="card" style="text-align: center;height: 220px;padding-top: 59px;">
                            <div class="" style="background-image:url('{{url('/')}}/images/server.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                            {{$service_manager_r->app_name}}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="menu2" class="tab-pane fade in active">
            <div class="row">
                @foreach($service_manager['get_unpublished_app'] as $service_manager_r)
                    <div class="col-md-3">
                        <div class="card" style="text-align: center;height: 220px;padding-top: 59px;">
                            <div class="" style="background-image:url('{{url('/')}}/images/server.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;filter:grayscale(1);"></div>
                            {{$service_manager_r->app_name}}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>





@endif