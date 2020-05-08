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
        <input type="file" class="form-control-file" name="" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="banner_section"  name="banner_section" {{ xelenic_settings('banner_section') == "1" ? "checked" : "0"}} >
        <label class="form-check-label" for="banner_section"  >Enabled Banner Section</label>
    </div>





</div>