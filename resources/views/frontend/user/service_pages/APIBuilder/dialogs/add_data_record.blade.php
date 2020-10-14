<!-- Modal -->
<div class="modal fade " id="add_data_record" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="text-align: initial;padding-bottom: 10px;padding-top: 30px;">Add Record</h4>
                        <p style="text-align: left;font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus nisl vitae sollicitudin placerat. Proin quis viverra purus, et fringilla neque.
                            Morbi at nisi sit amet urna sodales congue et at massa.</p> <br><br>
                        <form action="{{route('frontend.user.api_builder.insert_record')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="app_id" value="{{$get_app_details->_id}}">
                            <input type="hidden" name="table_id" value="{{$table_details->_id}}">
                            @foreach($get_table_field as $insert_item)
                                <div class="form-group">
                                    <label>{{$insert_item->field_name}}</label>
                                    <input type="text" class="form-control" name="data[{{$insert_item->data_field_id}}]" required>
                                </div>
                            @endforeach

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





