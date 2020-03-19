@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    @include('frontend.user.dashboard_components.header')

    @include('frontend.user.dashboard_components.sidebar')


    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head">
                    <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="brand" />
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                </div>

                <hr>
                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select" class="btn btn-outline-success btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select" class="btn btn-outline-success btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-success scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-success btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
        <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
        <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
    </div>
    <!-- /Setting Panel -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper" style="margin-left:inherit;">
        <!-- Container -->
        <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
            <ul class="nav nav-tabs nav-sm nav-light mb-25" role="tablist">
                <li class="nav-item mb-5">
                    <a class="nav-link link-icon-left active" data-toggle="tab" href="#tabs-1" role="tab"><i class="zmdi zmdi-apps"></i>My Dashboard</a>
                </li>

                <li class="nav-item mb-5">
                    <a class="nav-link link-icon-left"  href="#" role="tab"><i class="zmdi zmdi-trending-up"></i>Sales Insights</a>
                </li>
                <li class="nav-item mb-5">
                    <a class="nav-link link-icon-left"  href="#" role="tab"><i class="zmdi zmdi-headset"></i>Help Desk Insights</a>
                </li>
                <li class="nav-item mb-5">
                    <a class="nav-link link-icon-left" href="#tabs-4" role="tab"><i class="zmdi zmdi-device-hub"></i>Tickets Insights</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card overflow-hide border-0">
                                                <div class="card-body pa-0 mnh-250p">
                                                    <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                                                        <div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/gallery/mock7.jpg);">
                                                            <div class="position-relative z-index-2 pa-20">
                                                                <div class="position-relative text-white mnh-225p">
                                                                    <p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
                                                                    <div class="media position-absolute b-0 l-0 align-items-center">
                                                                        <div class="media-img-wrap d-flex mr-15">
                                                                            <div class="avatar avatar-sm">
                                                                                <span class="avatar-text avatar-text-inv-success rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span class="d-block font-14 font-weight-500">Zuck Chan</span>
                                                                            <span class="d-block font-12">Design Lead, Hencework</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bg-overlay bg-trans-dark-50"></div>
                                                        </div>
                                                        <div class="fadeOut item img-background overlay-wrap" style="background-image:url(dist/img/gallery/mock8.jpg);">
                                                            <div class="position-relative z-index-2 pa-20">
                                                                <div class="position-relative text-white mnh-225p">
                                                                    <p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
                                                                    <div class="media position-absolute b-0 l-0 align-items-center">
                                                                        <div class="media-img-wrap d-flex mr-15">
                                                                            <div class="avatar avatar-sm">
                                                                                <span class="avatar-text avatar-text-inv-success rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <span class="d-block font-14 font-weight-500">Normand T.</span>
                                                                            <span class="d-block font-12">Sales Executive, Media</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bg-overlay bg-trans-dark-50"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header card-header-action">
                                                    <h6>Users by Gendar & Age</h6>
                                                    <div class="d-flex align-items-center card-action-wrap">
                                                        <div class="inline-block dropdown">
                                                            <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="e_chart_1" class="" style="height:283px;"></div>
                                                    <div class="hk-legend-wrap mt-20">
                                                        <div class="hk-legend">
                                                            <span class="d-10 bg-success rounded-circle d-inline-block"></span><span>18-24</span>
                                                        </div>
                                                        <div class="hk-legend">
                                                            <span class="d-10 bg-green-light-1 rounded-circle d-inline-block"></span><span>25-34</span>
                                                        </div>
                                                        <div class="hk-legend">
                                                            <span class="d-10 bg-green-light-2 rounded-circle d-inline-block"></span><span>35-44</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Revenue this month</span>
                                                    <div class="d-flex align-items-end justify-content-between">
                                                        <div>
																<span class="d-block">
																	<span class="display-5 font-weight-400 text-dark">$8,725</span>
																	<small>excl tax</small>
																</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-danger font-12 font-weight-600">+5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-bar-xs mt-30">
                                                        <div class="progress-bar bg-danger w-55" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Visits</span>
                                                    <div class="d-flex align-items-end justify-content-between">
                                                        <div>
																<span class="d-block">
																	<span class="display-5 font-weight-400 text-dark">12,725</span>
																	<small>Users</small>
																</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-success font-12 font-weight-600">+5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-bar-xs mt-30">
                                                        <div class="progress-bar bg-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header card-header-action">
                                                    <h6>Total Sales</h6>
                                                    <div class="d-flex align-items-center card-action-wrap">
                                                        <div class="inline-block dropdown">
                                                            <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start justify-content-between mb-5">
                                                        <div class="display-5 text-dark">$40,630</div>
                                                        <div class="font-16 text-green font-weight-500">
                                                            <i class="ion ion-md-arrow-up mr-5"></i>
                                                            <span>5.12%</span>
                                                        </div>
                                                    </div>
                                                    <div id="e_chart_10" class="echart" style="height:220px;"></div>
                                                    <div class="hk-legend-wrap mt-10">
                                                        <div class="hk-legend">
                                                            <span class="d-10 bg-green rounded-circle d-inline-block"></span><span>Today</span>
                                                        </div>
                                                        <div class="hk-legend">
                                                            <span class="d-10 bg-green-light-1 rounded-circle d-inline-block"></span><span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body pa-0">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                    <label class="custom-control-label" for="customCheck4">Lead Title</label>
                                                                </div>
                                                            </th>
                                                            <th>Sales</th>
                                                            <th>Company</th>
                                                            <th>Date Created</th>
                                                            <th>Lead Status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck41" checked="">
                                                                    <label class="custom-control-label" for="customCheck41"><span class="w-130p d-block text-truncate">connar_weiked@ae.com</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$2000</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>A</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">American Express</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                22/10/2018
                                                            </td>
                                                            <td><span class="badge badge-success">On track</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck42">
                                                                    <label class="custom-control-label" for="customCheck42"><span class="w-130p d-block text-truncate">express_notingham@em.au</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$1600</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-danger rounded-circle"><span class="initial-wrap"><span>M</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Exxon Mobil</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                15/09/2018
                                                            </td>
                                                            <td><span class="badge badge-success">On track</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck43">
                                                                    <label class="custom-control-label" for="customCheck43"><span class="w-130p d-block text-truncate">locast12_host@nova.com</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$1265</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-teal rounded-circle"><span class="initial-wrap"><span>B</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Big Blackship</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                30/08/2018
                                                            </td>
                                                            <td><span class="badge badge-danger">Behind</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck44">
                                                                    <label class="custom-control-label" for="customCheck44"><span class="w-130p d-block text-truncate">grillmac@sundance.co.in</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$4562</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-indigo rounded-circle"><span class="initial-wrap"><span>F</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Folkswagan</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                14/03/2018
                                                            </td>
                                                            <td><span class="badge badge-purple">Negotiation</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck45">
                                                                    <label class="custom-control-label" for="customCheck45"><span class="w-130p d-block text-truncate">admin@novotel.inc</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$5012</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-purple rounded-circle"><span class="initial-wrap"><span>N</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Novotel</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                21/02/2018
                                                            </td>
                                                            <td><span class="badge badge-orange">Offer Made</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck46">
                                                                    <label class="custom-control-label" for="customCheck46"><span class="w-130p d-block text-truncate">displaypic@ho.au</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$1245</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-pink rounded-circle"><span class="initial-wrap"><span>D</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Displaypic</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                3/02/2018
                                                            </td>
                                                            <td><span class="badge badge-orange">Offer Made</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox checkbox-success">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck47">
                                                                    <label class="custom-control-label" for="customCheck47"><span class="w-130p d-block text-truncate">manager@cobito.com</span></label>
                                                                </div>
                                                            </td>
                                                            <td>$1245</td>
                                                            <td>
                                                                <div class="media align-items-center">
                                                                    <div class="media-img-wrap d-flex mr-10">
                                                                        <div class="avatar avatar-xs">
                                                                            <span class="avatar-text avatar-text-yellow rounded-circle"><span class="initial-wrap"><span>C</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <span class="d-block">Cobito co.</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                18/01/2018
                                                            </td>
                                                            <td><span class="badge badge-danger">Behind</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-4">
                                    <div class="card card-refresh">
                                        <div class="refresh-container">
                                            <div class="loader-pendulums"></div>
                                        </div>
                                        <div class="card-header card-header-action">
                                            <h6>Monthly Subscribers</h6>
                                            <div class="d-flex align-items-center card-action-wrap">
                                                <a href="#" class="inline-block refresh mr-15">
                                                    <i class="ion ion-md-radio-button-off"></i>
                                                </a>
                                                <div class="inline-block dropdown">
                                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="hk-legend-wrap mb-20">
                                                <div class="hk-legend">
                                                    <span class="d-10 bg-success rounded-circle d-inline-block"></span><span>Desktop</span>
                                                </div>

                                                <div class="hk-legend">
                                                    <span class="d-10 bg-green-light-1 rounded-circle d-inline-block"></span><span>Mobile</span>
                                                </div>
                                                <div class="hk-legend">
                                                    <span class="d-10 bg-green-light-2 rounded-circle d-inline-block"></span><span>Ipad</span>
                                                </div>
                                                <div class="hk-legend">
                                                    <span class="d-10 bg-green-light-3 rounded-circle d-inline-block"></span><span>Referral</span>
                                                </div>
                                            </div>
                                            <div id="e_chart_5" class="echart" style="height: 240px;"></div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header card-header-action">
                                            <h6>Referral Stats</h6>
                                            <div class="d-flex align-items-center card-action-wrap">
                                                <a href="#" class="inline-block refresh mr-15">
                                                    <i class="ion ion-md-arrow-down"></i>
                                                </a>
                                                <a href="#" class="inline-block full-screen">
                                                    <i class="ion ion-md-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body pa-0">
                                            <div class="pa-20">
                                                <div id="m_chart_1" style="height: 370px"></div>
                                            </div>
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-hover mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th class="w-25">Country</th>
                                                            <th>Sessions</th>
                                                            <th>Goals</th>
                                                            <th>Goals Rate</th>
                                                            <th>Bounce Rate</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Canada</td>
                                                            <td>55,555</td>
                                                            <td>210</td>
                                                            <td>2.46%</td>
                                                            <td>0.26%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>India</td>
                                                            <td>24,152</td>
                                                            <td>135</td>
                                                            <td>0.58%</td>
                                                            <td>0.43%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UK</td>
                                                            <td>15,640</td>
                                                            <td>324</td>
                                                            <td>5.15%</td>
                                                            <td>2.47%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Botswana</td>
                                                            <td>12,148</td>
                                                            <td>854</td>
                                                            <td>4.19%</td>
                                                            <td>0.1%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>UAE</td>
                                                            <td>11,258</td>
                                                            <td>453</td>
                                                            <td>8.15%</td>
                                                            <td>0.14%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td>10,786</td>
                                                            <td>376</td>
                                                            <td>5.48%</td>
                                                            <td>0.45%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phillipines</td>
                                                            <td>9,485</td>
                                                            <td>63</td>
                                                            <td>3.51%</td>
                                                            <td>0.9%</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
            </div>
        </div>
        <!-- /Container -->
    @include('frontend.user.dashboard_components.sidebar')


@endsection
