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
               aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="{{route('admin.settings.home_page.save')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        @include('backend.settings.settings_block.banner_section')
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









        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
            wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
            lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
            squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
            etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
            stumptown. Pitchfork sustainable tofu synth chambray yr.
        </div>
    </div>
@endsection

