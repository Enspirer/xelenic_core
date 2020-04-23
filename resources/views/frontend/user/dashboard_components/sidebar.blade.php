<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.user.dashboard')}}">
                        <i class="ion ion-md-outlet"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-with-badge" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                        <i class="ion ion-md-cart"></i>
                        <span class="nav-link-text">Billing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-with-badge" href="{{route('frontend.user.my_service.index')}}">
                        <i class="ion ion-md-appstore"></i>
                        <span class="nav-link-text">My Service</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);">
                        <i class="ion ion-md-document"></i>
                        <span class="nav-link-text">Pages</span>
                    </a>
                </li>
            </ul>

            <hr class="nav-separator">
            <div class="nav-header">
                <span>Services</span>
                <span>UI</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a  class="nav-link" href="{{route('frontend.user.cloud_services')}}">
                        <i class="ion ion-md-cloud"></i>
                        <span class="nav-link-text">Services Explorer</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link" href="{{route('frontend.user.file_manager')}}">
                        <i class="ion ion-md-folder"></i>
                        <span class="nav-link-text">File Manager</span>
                    </a>
                </li>

                @foreach($my_courses_r as $mycourse)
                    @if ($mycourse->my_service_id == 2)
                        <li class="nav-item">
                            <a  class="nav-link" href="{{route('frontend.user.cloud_services')}}">
                                <i class="ion ion-md-lock"></i>
                                <span class="nav-link-text">{{$mycourse->service_name}}</span>
                            </a>
                        </li>
                    @else

                    @endif

                @endforeach



                <li class="nav-item">
                    <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="typography.html">Service Monitor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="images.html">Request Monitor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                        <i class="ion ion-md-git-branch"></i>
                        <span class="nav-link-text">Utilities</span>
                    </a>
                    <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="background.html">Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="border.html">Border</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="colors.html">Colors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="embeds.html">Embeds</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons.html">Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shadow.html">Shadow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sizing.html">Sizing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="spacing.html">Spacing</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                        <i class="ion ion-md-calculator"></i>
                        <span class="nav-link-text">Forms</span>
                    </a>
                    <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="form-element.html">Form Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="input-groups.html">Input Groups</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-layout.html">Form Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-mask.html">Form Mask</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-validation.html">Form Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file-upload.html">File Upload</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editor.html">Editor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                        <i class="ion ion-md-grid"></i>
                        <span class="nav-link-text">Tables</span>
                    </a>
                    <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="basic-table.html">Basic Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="data-table.html">Data Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editable-table.html">Editable Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                        <i class="ion ion-md-stats"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                    <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="line-charts.html">Line Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="area-charts.html">Area Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                        <i class="ion ion-md-map"></i>
                        <span class="nav-link-text">Maps</span>
                    </a>
                    <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="google-map.html">Google Map</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Getting Started</span>
                <span>GS</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="documentation.html">
                        <i class="ion ion-md-bookmarks"></i>
                        <span class="nav-link-text">Documentation</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>