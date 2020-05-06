@foreach(xelenic_settings('homepage_feature_data') as $feature_data)
    <div style="border-style: dashed;background: #ebebeb;border-width: 1px;padding: 10px;margin-bottom: 10px;/* color: white; */">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="head[]" style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;height: 27px;">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="descript[]" style="font-size: 11px;padding-top: 0px;padding-bottom: 0px;height: 77px;"></textarea>
        </div>
    </div>
@endforeach