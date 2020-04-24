<div class="tab-pane fade show active" role="tabpanel" id="upload" style="text-align: left;">
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Dropzone</h5>
                <p class="mb-40">A lightweight open source library that provides drag’n’drop file uploads with image previews.</p>
                <div  class="row">
                    <div class="col-sm">
                        <form method="post" action="{{route('frontend.user.file_manager.save')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </section>
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