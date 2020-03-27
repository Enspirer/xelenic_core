<!-- Modal -->
<div class="modal fade " id="plug_api" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="" style="background-image:url('{{url('/')}}/images/icon/plug_dialog.jpg');height: 260px;background-position: center;background-size: contain;background-repeat: no-repeat;margin-bottom: 20px;"></div>
                    </div>
                    <div class="col-md-6">
                        <h4 style="text-align: initial;padding-bottom: 10px;padding-top: 30px;">Plug and Play Web API</h4>
                        <p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus nisl vitae sollicitudin placerat. Proin quis viverra purus, et fringilla neque.
                            Morbi at nisi sit amet urna sodales congue et at massa. Nam sit amet felis vel ipsum congue elementum
                            . Nulla maximus nisl nec nunc posuere aliquam. Nulla pulvinar massa in elit iaculis aliquam.</p>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{route('frontend.user.api_builder.change_app_type')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" value="1" name="api_type">
                    <input type="hidden" value="{{$get_app_details->key}}" name="api_key">
                    <input type="hidden" value="{{$get_app_details->ab_id}}" name="ab_id">
                    <input type="hidden" value="{{$service_id}}" name="service_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Activate</button>
                </form>

            </div>
        </div>
    </div>
</div>

