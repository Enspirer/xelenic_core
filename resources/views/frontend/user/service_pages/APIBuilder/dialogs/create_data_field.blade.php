<!-- Modal -->
<div class="modal fade " id="insert_data_field" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="text-align: initial;padding-bottom: 10px;padding-top: 30px;">Add Data Field</h4>
                        <p style="text-align: left;font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus nisl vitae sollicitudin placerat. Proin quis viverra purus, et fringilla neque.
                            Morbi at nisi sit amet urna sodales congue et at massa.</p> <br><br>
                        <form action="{{route('frontend.user.api_builder.insert_data_field')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Field Name</label>
                                <input type="text" class="form-control" name="field_name" required>
                                <input type="hidden" class="form-control" name="service_id" value="{{$service_details->service_id}}" required>
                                <input type="hidden" class="form-control" name="ab_id" value="{{$get_app_details->_id}}" required>
                                <input type="hidden" class="form-control" name="table_id" value="{{$table_details->_id}}" required>
                            </div>
                            <div class="form-group">
                                <label>Data Type</label>
                                <select class="form-control" name="data_type">
                                    <option value="text">Text</option>
                                    <option value="number">Number</option>
                                    <option value="long_text">Long Text</option>
                                    <option value="hash">Hash</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>

