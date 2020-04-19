<div class="modal fade" id="create_template" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('frontend.user.qulint_builder.create_template')}}" method="post">
                {{csrf_field()}}
                <div class="modal-body">
                    <div>
                        <label>Template Name</label>
                        <input type="text" name="template_name" class="form-control" required> <br>
                        <input type="hidden" name="service_id" value="{{$service_details->service_id}}" class="form-control" required> <br>

                        <label>Description</label>
                        <textarea class="form-control" name="description" required></textarea> <br>

                        <label>Template Type</label>
                        <select class="form-control" name="template_type" required>
                            <option value="single_page">Single Page</option>
                            <option value="raout_ricking">Route Ricking Page</option>
                            <option value="landing_page">Landing Page</option>
                        </select> <br>

                        <label>Category</label>
                        <select class="form-control" name="category" required>
                            <option value="blog">Blog</option>
                            <option value="company">Company</option>
                            <option value="profile">Profile</option>
                            <option value="movie">Movie</option>
                            <option value="raw">Raw</option>
                        </select>
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



