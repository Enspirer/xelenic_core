<h4>Banner Section</h4>

<div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;margin-bottom: 30px;">
    <div class="form-group">
        <label>Custom Solution Title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_custom_solution_title')}}" required name="homepage_custom_solution_title">
    </div>
    <div class="form-group">
        <label>Custom Solution Description</label>
        <textarea type="text" class="form-control" required name="homepage_custom_solution_description" style="margin-top: 0px; margin-bottom: 0px; height: 127px;">{{xelenic_settings('homepage_custom_solution_description')}}</textarea>
    </div>

    <div class="form-group">
        <label>Button</label>
        <input type="text" class="form-control" name="homepage_custom_solution_button" value="{{xelenic_settings('homepage_custom_solution_button')}}" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
    </div>
    <div class="form-group">
        <label>Button Link</label>
        <input type="text" class="form-control" name="homepage_custom_solution_link" value="{{xelenic_settings('homepage_custom_solution_link')}}" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="homepage_custom_solution_section"  name="homepage_custom_solution_section" {{ xelenic_settings('homepage_custom_solution_section') == "1" ? "checked" : "0"}} >
        <label class="form-check-label" for="homepage_custom_solution_section"  >Enabled Custom Solution</label>
    </div>

</div>