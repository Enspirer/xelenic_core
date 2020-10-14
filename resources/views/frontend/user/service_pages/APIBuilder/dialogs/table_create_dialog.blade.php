<!-- Modal -->
<div class="modal fade " id="create_table_dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="" style="background-image:url('{{url('/')}}/images/create_table.jpg');height: 260px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                        </div>
                        <div class="col-md-6">
                            <h4 style="text-align: initial;padding-bottom: 10px;padding-top: 30px;">Create Table</h4>
                            <p style="text-align: left;font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus nisl vitae sollicitudin placerat. Proin quis viverra purus, et fringilla neque.
                                Morbi at nisi sit amet urna sodales congue et at massa.</p> <br><br>
                            <form action="{{route('frontend.user.api_builder.create_table')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Table name</label>
                                    <input type="hidden" value="{{$get_app_details->_id}}" placeholder="Table name" class="form-control" name="ab_id" required>
                                    <input type="hidden" value="{{$service_details->service_id}}" placeholder="Table name" class="form-control" name="service_id" required>
                                    <input type="hidden" value="{{$get_app_details->key}}" placeholder="Table name" class="form-control" name="api_key" required>
                                    <input type="text" value="" placeholder="Table name" class="form-control" name="table_name" required>
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

