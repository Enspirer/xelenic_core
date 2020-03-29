<!-- Modal -->
<div class="modal fade " id="insert_data_field" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="{{route('frontend.user.api_builder.insert_data_field')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">

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

