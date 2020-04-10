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
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item "><a href="{{route('frontend.user.my_service.index')}}">My Service</a></li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="row">

            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Qulint Builder</h5>
                    <p class="mb-30">Use border utilities to add an element’s borders. Choose from all borders or one at a time.</p>

                    <div class="bg-white shadow-bottom">
                        <div class="container-fluid px-xxl-65 px-xl-20">
                            <ul class="nav nav-light nav-tabs" role="tablist">
                                <li class="nav-item active">
                                    <a data-toggle="tab" href="#menu1" class="d-flex h-60p align-items-center nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#menu2" class="d-flex h-60p align-items-center nav-link active">Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#menu3" class="d-flex h-60p align-items-center nav-link">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div> <br><br>

                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade">
                            <h4>Dashboard</h4>
                        </div>

                        <div id="menu2" class="tab-pane fade in active show">

                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Page Name</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Milk Powder</td>
                                                        <td>Milk Powder</td>
                                                        <td>Milk Powder</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade in">

                            <h2>Create template</h2>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>


</div>


    @include('frontend.user.dashboard_components.footer')























