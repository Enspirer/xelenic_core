@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
               aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div>Page Title</div>
                        <input type="text" class="form-control" value="{{xelenic_settings('homepage_title')}}" required name="home_page_title">
                    </div>
                    <div class="form-group">
                        <div>Banner Title</div>
                        <input type="text" class="form-control" value="{{xelenic_settings('homepage_banner_head')}}" required name="banner_title">
                    </div>
                    <div class="form-group">
                        <div>Banner Title</div>
                        <textarea type="text" class="form-control" required name="homepage_banner_head" style="margin-top: 0px; margin-bottom: 0px; height: 127px;">{{xelenic_settings('homepage_banner_text')}}</textarea>
                    </div>

                </div>
                <div class="col-md-6">
                    sdfjhksdhf

                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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

