
<form action="{{route('admin.settings.home_page.save_features_data.save')}}" method="post">
    {{csrf_field()}}
    @foreach(xelenic_settings('homepage_feature_data') as $feature_data)
        <div style="background: #ebebeb;border-width: 1px;padding: 10px;margin-bottom: 10px;/* color: white; */">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="head[]" style="" value="{{$feature_data->head}}">
                        <input type="hidden" class="form-control" name="id[]" style="" value="1">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="description[]" style="height: 77px;">{{$feature_data->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>link</label>
                        <input type="text" class="form-control" name="link[]">
                    </div>
                    <div class="form-group">
                        <label>Feature Icon</label>
                        <select class="form-control" name="icon[]">
                            <option value="fa fa-icon">icon fa-book</option>
                            <option value="fa fa-icon">icon fa-book</option>
                            <option value="fa fa-icon">icon fa-book</option>
                            <option value="fa fa-icon">icon fa-book</option>
                            <option value="fa fa-icon">icon fa-book</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <button class="btn btn-primary" type="submit">Save Settings</button>

</form>
