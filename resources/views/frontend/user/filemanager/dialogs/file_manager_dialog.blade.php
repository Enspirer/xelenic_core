
<div id="file_manager_dialog" class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                Upload Files
            </div> <br><br>

            <div class="modal-body">
                <div  class="row">
                    <div class="col-sm">
                        <form method="post" action="{{route('frontend.user.file_manager.save')}}" enctype="multipart/form-data" class="dropzone" id="dropzone" style="border-style: dashed;">
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a href="" class="btn btn-primary pull-right">Done</a>
            </div>
        </div>
    </div>
</div>


