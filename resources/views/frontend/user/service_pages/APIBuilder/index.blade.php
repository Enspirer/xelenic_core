@if ($service_details->service_id == 1)
    <div class="row">
        <div class="col-md-3">
            <div style="border-radius: 5px;height: 220px;border-width: 1px;border-style: dashed;padding: 10px;border-color: #c8c8c8;text-align: center;">OpenScrime</div>
        </div>
        @foreach($service_manager as $service_manager_r)
            <div class="col-md-3">
                <div class="card" style="text-align: center;height: 220px;padding-top: 59px;">
                    <i class="fa fa-cloud" style="font-size: 80px"></i>
                    {{$service_manager_r->app_name}}</div>
            </div>
        @endforeach
    </div>
@endif