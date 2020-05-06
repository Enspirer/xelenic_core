<h4>Partner Logo Section</h4>
<div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;">
    <div class="form-group">
        <label>Partner Logo Section title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_partner_logo_section_title')}}" required name="homepage_partner_logo_section_title">
    </div>
    <div class="checkbox d-flex align-items-center">
        <label class="switch switch-label switch-pill switch-primary mr-2" for="banner_section_status-1">
            <input class="switch-input" type="checkbox" name="homepage_partner_logo_section" id="homepage_partner_logo_section-1" value="{{xelenic_settings('homepage_partner_logo_section')}}" {{ xelenic_settings('homepage_partner_logo_section') == "true" ? "checked" : ""}}>
            <span class="switch-slider" data-checked="on" data-unchecked="off"></span>
        </label>
        <label for="banner_section_status-1">Logo Section Enabled</label>
    </div>
</div>