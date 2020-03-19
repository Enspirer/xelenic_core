

<!-- Modal -->
<div class="modal fade" id="service_create_dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: none;width: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.cloud_service.insert')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input type="text" class="form-control" name="service_name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Service Author</label>
                                <input type="text" class="form-control" name="service_author" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Price Status</label>
                                <select class="form-control" name="payment_status" required>
                                    <option value="1">Free Service</option>
                                    <option value="2">Paid Service</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control" name="service_description" style="margin-top: 0px;margin-bottom: 0px;height: 136px;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Service URL</label>
                            <input type="text" class="form-control" name="service_url" required>
                        </div>
                        <div class="col-md-3">
                            <label>Service Provider</label>
                            <input type="text" class="form-control" name="service_provider" required>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Cover Image</label>
                                <input type="file" class="form-control-file" name="thumbs_img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="1">Publish</option>
                                <option value="2">Unpublish</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Service Price</label>
                            <input type="text" class="form-control" name="service_price">
                        </div>
                        <div class="col-md-6">
                            <label>Service Token</label>
                            <input type="text" class="form-control" name="service_token" required>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>