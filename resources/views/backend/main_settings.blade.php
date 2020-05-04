@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Home Page</a>
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

                    <h4>Banner Section</h4>


                    <div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;margin-bottom: 30px;">
                        <div class="form-group">
                            <label>Banner Title</label>
                            <input type="text" class="form-control" value="{{xelenic_settings('homepage_banner_head')}}" required name="homepage_banner_head">
                        </div>
                        <div class="form-group">
                            <label>Banner Description</label>
                            <textarea type="text" class="form-control" required name="homepage_banner_text" style="margin-top: 0px; margin-bottom: 0px; height: 127px;">{{xelenic_settings('homepage_banner_text')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control-file" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
                        </div>

                        <div class="checkbox d-flex align-items-center">
                            <label class="switch switch-label switch-pill switch-primary mr-2" for="permission-1">
                                <input class="switch-input" type="checkbox" name="banner_section_status" id="permission-1" value="view backend">
                                <span class="switch-slider" data-checked="on" data-unchecked="off"></span>
                            </label>
                            <label for="permission-1">Banner Section Enabled</label>
                        </div>
                    </div>
                    <div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px; margin-bottom: 30px;">
                        <div class="form-group">
                            <label>Banner Title</label>
                            <input type="text" class="form-control" value="{{xelenic_settings('homepage_banner_head')}}" required name="homepage_banner_head">
                        </div>
                        <div class="form-group">
                            <label>Banner Description</label>
                            <textarea type="text" class="form-control" required name="homepage_banner_text" style="margin-top: 0px; margin-bottom: 0px; height: 127px;">{{xelenic_settings('homepage_banner_text')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" class="form-control-file" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
                        </div>

                        <div class="checkbox d-flex align-items-center">
                            <label class="switch switch-label switch-pill switch-primary mr-2" for="permission-1">
                                <input class="switch-input" type="checkbox" name="banner_section_status" id="permission-1" value="view backend">
                                <span class="switch-slider" data-checked="on" data-unchecked="off"></span>
                            </label>
                            <label for="permission-1">Banner Section Enabled</label>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <h4>Partner Logo Section</h4>
                    <div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;">
                        <div class="form-group">
                            <label>Partner Logo Section title</label>
                            <input type="text" class="form-control" value="{{xelenic_settings('homepage_banner_head')}}" required name="banner_title">
                        </div>
                        <div class="checkbox d-flex align-items-center">
                            <label class="switch switch-label switch-pill switch-primary mr-2" for="permission-1"><input class="switch-input" type="checkbox" name="banner_section_status" id="permission-1" value="view backend"><span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
                            <label for="permission-1">Logo Section Enabled</label>
                        </div>
                    </div>
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

