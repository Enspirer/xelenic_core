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
        <label class="switch switch-label switch-pill switch-primary mr-2" for="homepage_partner_logo_section-1">
            <input class="switch-input" type="checkbox" name="homepage_partner_logo_section" id="homepage_partner_logo_section-1" value="on">
            <span class="switch-slider" data-checked="on" data-unchecked="off"></span>
        </label>
        <label for="homepage_partner_logo_section-1">Banner Section Enabled</label>
    </div>
</div>