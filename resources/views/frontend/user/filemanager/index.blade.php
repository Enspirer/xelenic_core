@include('frontend.user.dashboard_components.header')
<link href="{{url('/')}}/FrontDashboard/vendors/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet" type="text/css">

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

                        <div class="tab-pane fade" role="tabpanel" id="photos">
                            <h6 class="mt-30 mb-20">22 October</h6>
                            <div class="row hk-gallery">
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="FrontDashboard/dist/img/gallery/mock1.jpg">
                                    <a href="#" class="">
                                        <div class="gallery-img" style="background-image:url('FrontDashboard/dist/img/gallery/mock1.jpg');"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="file">
                            <h2>Files</h2>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@include('frontend.user.dashboard_components.footer')
