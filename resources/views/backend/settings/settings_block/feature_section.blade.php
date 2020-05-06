<h4>Feature Section</h4>
<div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;">
    <div class="form-group">
        <label>Feature Title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_feature_title')}}" required name="homepage_feature_title">
    </div>

    <div class="form-group">
        <label>Sub Title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_feature_subtitle')}}" required name="homepage_feature_subtitle">
    </div>



    <div style="border-style: dashed;border-color: darkgray;border-width: 1px;padding: 10px;margin-bottom: 10px;">

    </div>

    <div class="checkbox d-flex align-items-center">
        <label class="switch switch-label switch-pill switch-primary mr-2" for="permission-1">
            <input class="switch-input" type="checkbox" name="banner_section_status" id="permission-1" value="true">
            <span class="switch-slider" data-checked="on" data-unchecked="off"></span></label>
        <label for="permission-1">Feature Section Enabled</label>
    </div>


</div>