<h4>Partner Logo Section</h4>
<div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;">
    <div class="form-group">
        <label>Partner Logo Section title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_partner_logo_section_title')}}" required name="homepage_partner_logo_section_title">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="partner_section"  name="homepage_partner_logo_section" {{ xelenic_settings('homepage_partner_logo_section') == "1" ? "checked" : "0"}}>
        <label class="form-check-label" for="partner_section"  >Enabled Banner Section</label>
    </div>
</div>