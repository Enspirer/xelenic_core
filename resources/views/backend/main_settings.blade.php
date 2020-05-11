@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Home Page</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="feature_data-tab" data-toggle="tab" href="#feature_data" role="tab" aria-controls="feature_data"
               aria-selected="false">Feature Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
               aria-selected="false">Main Settings</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="{{route('admin.settings.home_page.save')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        @include('backend.settings.settings_block.banner_section')
                        <br>
                        @include('backend.settings.settings_block.custom_service')
                    </div>
                    <div class="col-md-6">
                        @include('backend.settings.settings_block.partner_logo_section')
                        <br>
                        @include('backend.settings.settings_block.feature_section')
                        <br>
                        @include('backend.settings.settings_block.description_block1')

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Settings</button>

            </form>


        </div>











        <div class="tab-pane fade" id="feature_data" role="tabpanel" aria-labelledby="feature_data-tab">
            @include('backend.settings.settings_block.feature_data')
        </div>









        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <form action="{{route('admin.settings.home_page.save_main_settings.save')}}" method="post">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-md-6">
                        <h4>Background Settings</h4>
                        <div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;margin-bottom: 30px;">
                        <div class="row">

                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Footer Background Color</label>
                                            <input type="text" class="form-control" value="{{xelenic_settings('footer_color')}}" required name="footer_color">
                                        </div>
                                        <div class="form-group">
                                            <label>Wave Background Color</label>
                                            <input type="text" class="form-control" value="{{xelenic_settings('wave_color')}}" required name="wave_color">
                                        </div>
                                        <div class="form-group">
                                            <label>Menu Background Color</label>
                                            <input type="text" class="form-control" value="{{xelenic_settings('menu_color')}}" required name="menu_color">
                                        </div>
                                        <div class="form-group">
                                            <label>Menu Option Color</label>
                                            <input type="text" class="form-control" value="{{xelenic_settings('menu_option_color')}}" required name="menu_option_color">
                                        </div>
                                        <div class="form-group">
                                            <label>Menu Boarder Color</label>
                                            <input type="text" class="form-control" value="{{xelenic_settings('menu_option_border_color')}}" required name="menu_option_border_color">
                                        </div>
                                </div>

                            <div class="col-md-6">

                            </div>
                        </div>
                        </div>


                    </div>
                    <div class="col-md-6">


                    </div>
                </div>
            <button class="btn btn-primary" type="submit">Save Settings</button>
            </form>
        </div>
    </div>
@endsection

