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

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper hk-gallery-wrap">
                <ul class="nav nav-light nav-tabs" role="tablist">
                    <li class="nav-item active">
                        <a data-toggle="tab" onclick="location_changer('upload')" href="#upload" class="d-flex h-60p align-items-center nav-link">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab"  onclick="location_changer('file')" href="#file" class="d-flex h-60p align-items-center nav-link">File</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab"  onclick="location_changer('photos')" href="#photos" class="d-flex h-60p align-items-center nav-link">Photos</a>
                    </li>
                </ul>
                <div class="tab-content">
                @include('frontend.user.filemanager.pages.file_upload')
                @include('frontend.user.filemanager.pages.photos')
                </div>

            </section>
        </div>
    </div>


</div>

<script src="{{url('/')}}/FrontDashboard/vendors/dropzone/dist/dropzone.js"></script>

@include('frontend.user.dashboard_components.footer')
