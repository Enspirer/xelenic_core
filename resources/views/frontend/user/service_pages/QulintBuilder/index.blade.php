@if ($service_details->service_id == 3)

    @include('frontend.user.service_pages.QulintBuilder.dialogs.website_creator')
    @include('frontend.user.service_pages.QulintBuilder.dialogs.create_template')
    <div class="bg-white shadow-bottom">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item active">
                    <a data-toggle="tab" href="#menu1" class="d-flex h-60p align-items-center nav-link active">Published</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#menu2" class="d-flex h-60p align-items-center nav-link">Draft</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#menu3" class="d-flex h-60p align-items-center nav-link">Contribute</a>
                </li>
            </ul>
        </div>
    </div> <br><br>

    <div class="tab-content">
        <div id="menu1" class="tab-pane fade active show">
            <div class="row">
                <div class="col-md-3">
                    <div style="border-radius: 5px;height: 220px;border-width: 1px;border-style: dashed;padding: 10px;border-color: #c8c8c8;text-align: center;" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="fa fa-plus" style="font-size: 45px;padding-top: 30%;cursor: hand;"></i>
                        <p>Create a Website</p>
                    </div>
                </div>
                @foreach($service_manager['get_website_published'] as $service_manager_r)
                    <div class="col-md-3">

                        <div class="card" style="">
                            <a aria-expanded="false" data-toggle="dropdown" class="btn btn-link dropdown-toggle btn-icon-dropdown pull-right">
                                <i class="fa fa-list"></i><br>
                            </a>
                            <div role="menu" class="dropdown-menu" style="will-change: transform;">
                                <a class="dropdown-item" href="">Visit Website</a>
                                <a class="dropdown-item" href="">Edit Website</a>
                                <a class="dropdown-item" href="">Delete Website</a>
                            </div>
                            <div class="" style="background-image:url('{{url('/')}}/images/website.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                            <p style="text-align: center">{{$service_manager_r->website_name}}</p> <br>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

        <div id="menu2" class="tab-pane fade in">

                <div class="row">
                    @foreach($service_manager['get_website_unpublished'] as $service_manager_q)
                        <div class="col-md-3">

                            <div class="card" style="">
                                <a aria-expanded="false" data-toggle="dropdown" class="btn btn-link dropdown-toggle btn-icon-dropdown pull-right">
                                    <i class="fa fa-list"></i><br>
                                </a>
                                <div role="menu" class="dropdown-menu" style="will-change: transform;">
                                    <a class="dropdown-item" href="">Visit Website</a>
                                    <a class="dropdown-item" href="{{route('frontend.user.qulint_builder.website_dashboard',[ $service_manager_q->website_id,$service_manager_q->key])}}">Edit Website</a>
                                    <a class="dropdown-item" href="">Delete Website</a>
                                </div>
                                <div class="" style="background-image:url('{{url('/')}}/images/website.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                <p style="text-align: center">{{$service_manager_q->website_name}}</p> <br>
                            </div>

                        </div>
                    @endforeach
                </div>

        </div>

            <div id="menu3" class="tab-pane fade in">

               <div class="">
                   <div class="row">
                       <div class="col-md-3">
                           <div style="border-radius: 5px;height: 220px;border-width: 1px;border-style: dashed;padding: 10px;border-color: #c8c8c8;text-align: center;" data-toggle="modal" data-target="#create_template">
                               <i class="fa fa-plus" style="font-size: 45px;padding-top: 30%;cursor: hand;"></i>
                               <p>Create Template</p>
                           </div>
                       </div>

                       @foreach($service_manager['get_user_templates'] as $get_templates)
                           <div class="col-md-3">

                               <div class="card" style="height: 218px;">
                                   <a aria-expanded="false" data-toggle="dropdown" class="btn btn-link dropdown-toggle btn-icon-dropdown pull-right">
                                       <i class="fa fa-list"></i><br>
                                   </a>
                                   <div role="menu" class="dropdown-menu" style="will-change: transform;">
                                       <a class="dropdown-item" href="">View Template</a>
                                       <a class="dropdown-item" href="{{route('frontend.user.qulint_builder.edit_template',$get_templates->template_id)}}">Edit Template</a>
                                       <a class="dropdown-item" href="">Delete Template</a>
                                   </div>
                                   <div class="" style="background-image:url('{{url('/')}}/images/website.svg');height: 80px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                                   <p style="text-align: center">{{$get_templates->template_name}}</p> <br>
                               </div>

                           </div>
                       @endforeach

                   </div>
               </div>

            </div>


    </div>



@endif