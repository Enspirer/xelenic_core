<h4>Block 1 Section</h4>

<div class="group" style="background: #f4f4f4;padding: 10px;border-radius: 5px;margin-bottom: 30px;">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_desc_block_1_title')}}" required name="homepage_desc_block_1_title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" class="form-control" required name="homepage_desc_block_1_desc" style="margin-top: 0px; margin-bottom: 0px; height: 127px;">{{xelenic_settings('homepage_desc_block_1_desc')}}</textarea>
    </div>

    <div class="form-group">
        <label>Link</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_desc_block_link')}}" required name="homepage_desc_block_link">
    </div>

    <div class="form-group">
        <label>Block Button</label>
        <input type="text" class="form-control" value="{{xelenic_settings('homepage_desc_block_button')}}" required name="homepage_desc_block_button">
    </div>



    <div class="form-group">
        <label>Side Image</label>
        <input type="file" class="form-control-file" name="" style="background: white;padding: 10px;border-style: dashed;border-width: 1px;border-color: #cdcdcd;">
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="homepage_block_1"  name="homepage_block_1" {{ xelenic_settings('homepage_block_1') == "1" ? "checked" : "0"}} >
        <label class="form-check-label" for="homepage_block_1"  >Enabled Block Section</label>
    </div>

</div>