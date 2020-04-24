@include('frontend.user.dashboard_components.header')
<link href="{{url('/')}}/FrontDashboard/vendors/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/FrontDashboard/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>

<!-- Top Navbar -->
@include('frontend.user.dashboard_components.top_navbar')
@include('frontend.user.dashboard_components.search_box')

<!-- /Top Navbar -->

<!-- Vertical Nav -->
@include('frontend.user.dashboard_components.sidebar')

<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
<br>
@include('frontend.user.dashboard_components.settings_panel')

<!-- Main Content -->
<div class="hk-pg-wrapper">

    <div class="container-fluid px-xxl-65 px-xl-20" style="text-align: left;">

        <div class="row">

            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">File Manager</h5>
                    <p class="mb-30">Use border utilities to add an element’s borders. Choose from all borders or one at a time.</p>
                    <div class="bg-white shadow-bottom">
                        <div class="container-fluid px-xxl-65 px-xl-20">
                            <ul class="nav nav-light nav-tabs" role="tablist">
                                <li class="nav-item active">
                                    <a data-toggle="tab" href="#upload" class="d-flex h-60p align-items-center nav-link active">Upload</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#photos" class="d-flex h-60p align-items-center nav-link">Photos</a>
                                </li>
                            </ul>
                        </div>
                    </div> <br><br>

                    <div class="tab-content">
                        @include('frontend.user.filemanager.pages.file_upload')
                        @include('frontend.user.filemanager.pages.photos')


                </section>
            </div>
        </div>

    </div>

</div>



@include('frontend.user.dashboard_components.footer')
