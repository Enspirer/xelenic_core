@include('frontend.user.filemanager.dialogs.upload_dialog')

<div class="tab-pane fade show active" role="tabpanel" id="upload" style="text-align: left;">
    <div class="row">
        <div class="col-xl-12">
            <button class="btn btn-primary" data-toggle="modal" data-target="#upload_files">Upload</button>
        </div>
    </div>
</div>


<script src="{{url('/')}}/FrontDashboard/vendors/dropzone/dist/dropzone.js"></script>

<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            timeout: 5000,
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>