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

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="homepage_feature_section"  name="homepage_feature_section" {{ xelenic_settings('homepage_feature_section') == "1" ? "checked" : "0"}}>
        <label class="form-check-label" for="homepage_feature_section"  >Enabled Feature Section</label>
    </div>


</div>