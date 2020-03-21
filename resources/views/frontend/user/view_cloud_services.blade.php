@include('frontend.user.dashboard_components.header')

<!-- Top Navbar -->
@include('frontend.user.dashboard_components.top_navbar')
@include('frontend.user.dashboard_components.search_box')

<!-- /Top Navbar -->

<!-- Vertical Nav -->
@include('frontend.user.dashboard_components.sidebar')

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->

@include('frontend.user.dashboard_components.settings_panel')

<!-- Main Content -->
<div class="hk-pg-wrapper">

    <div class="profile-cover-wrap overlay-wrap">
        <div class="profile-cover-img" style="background-image: url('{{url('/')}}/storage/service_img/{{$service_details->cover_image}}');"></div>
        <div class="bg-overlay bg-trans-dark-60"></div>
        <div class="container-fluid px-xxl-65 px-xl-20 profile-cover-content py-50">
            <div class="row">
                <div class="col-lg-6">
                    <div class="media align-items-center">
                        <div class="media-img-wrap  d-flex">
                            <div class="avatar">
                                {{--<img src="dist/img/avatar11.jpg" alt="user" class="avatar-img rounded-circle">--}}
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="text-white text-capitalize display-6 mb-5 font-weight-400">{{$service_details->service_name}}</div>
                            <div class="font-14 text-white">
                                <span class="mr-5">
                                    <span class="font-weight-500 pr-5">124</span>
                                    <span class="mr-5">Running Events</span>
                                </span>
                                <span>
                                    <span class="font-weight-500 pr-5">45</span>
                                    <span class="">Status</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="button-list">
                        <form action="{{route('frontend.user.cloud_services.addservices')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="service_id" value="{{$service_details->service_id}}">
                            <button class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded">
                                Message
                            </button>
                        </form>
                        {{--<a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span class="btn-text">Add Service</span><span class="icon-label"><i class="icon ion-md-mail"></i> </span></a>--}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-white shadow-bottom">
        <div class="container-fluid px-xxl-65 px-xl-20">
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#" class="d-flex h-60p align-items-center nav-link active">Introduction</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="d-flex h-60p align-items-center nav-link">Documentation</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="d-flex h-60p align-items-center nav-link">Service Status</a>
                </li>
            </ul>
        </div>
    </div>



    <div class="" style="margin-top: 30px">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Description</h5>
                    <p class="mb-25">{{$service_details->service_description}}</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="accordion" id="accordion_1">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1" aria-expanded="true">Collapse One</a>
                                    </div>
                                    <div id="collapse_1" class="collapse show" data-parent="#accordion_1" role="tabpanel">
                                        <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer la. </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2" aria-expanded="false">Collapse Two </a>
                                    </div>
                                    <div id="collapse_2" class="collapse" data-parent="#accordion_1">
                                        <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3" aria-expanded="false">Collapse Three</a>
                                    </div>
                                    <div id="collapse_3" class="collapse" data-parent="#accordion_1">
                                        <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4" aria-expanded="false">Collapse Four</a>
                                    </div>
                                    <div id="collapse_4" class="collapse" data-parent="#accordion_1">
                                        <div class="card-body pa-15"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, inable VHS. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-wrap mt-40">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th class="w-35">Class</th>
                                        <th class="w-65">Values</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code class="pa-0 bg-transparent">class="accordion accordion-[value]"</code></td>
                                        <td class="font-14">primary / success / warning / danger / info / light / dark / red / green / pink / purple / violet / indigo / blue / sky / cyan / teal / neon / lime / sun / yellow / orange / pumpkin / brown / grey / gold / smoke</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>










    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="{{route('frontend.user.cloud_services')}}">Cloud Services</a></li>
            <li class="breadcrumb-item active"><a href="{{route('frontend.user.cloud_services')}}">Cloud Services</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->

    <div class="container-fluid px-xxl-65 px-xl-20">


    </div>

@include('frontend.user.dashboard_components.footer')