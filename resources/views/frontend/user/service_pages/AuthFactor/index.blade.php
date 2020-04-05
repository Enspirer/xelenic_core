@if ($service_details->service_id == 2)

        <div class="bg-white shadow-bottom">
            <div class="container-fluid px-xxl-65 px-xl-20">
                <ul class="nav nav-light nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a data-toggle="tab" onclick="location_changer('canvas')" href="#canvas" class="d-flex h-60p align-items-center nav-link">Canvas</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab"  onclick="location_changer('settings')" href="#settings_authfactor" class="d-flex h-60p align-items-center nav-link">Settings</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            @include('frontend.user.service_pages.AuthFactor.pages.components.canvas')
            @include('frontend.user.service_pages.AuthFactor.pages.components.settings')
        </div>





@endif