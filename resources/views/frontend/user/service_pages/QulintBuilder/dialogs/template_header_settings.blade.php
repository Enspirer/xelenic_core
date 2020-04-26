<div class="modal fade" id="template_header_settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Header Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('frontend.user.qulint_builder.create_template')}}" method="post">
                {{csrf_field()}}
                <div class="modal-body" style="text-align: left">
                    <div class="form-group">
                        <label>Template Name</label>
                        <input type="text" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" value="" required></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Template</button>
                </div>
            </form>

        </div>
    </div>
</div>



