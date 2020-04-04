@if ($service_details->service_id == 2)

        <div class="bg-white shadow-bottom">
            <div class="container-fluid px-xxl-65 px-xl-20">
                <ul class="nav nav-light nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a data-toggle="tab" onclick="location_changer('builder_dashboard')" href="#builder_dashboard" class="d-flex h-60p align-items-center nav-link">Canvas</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab"  onclick="location_changer('builder_table')" href="#builder_table" class="d-flex h-60p align-items-center nav-link">Settings</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">

        </div>

@endif