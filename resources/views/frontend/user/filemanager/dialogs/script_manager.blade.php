
<div id="script_manager" class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                Script manager
            </div>

            <div class="modal-body">
                <div  class="row">
                    <div class="col-lg">
                        <ul class="nav nav-light nav-tabs" role="tablist">
                            <li class="nav-item active">
                                <a data-toggle="tab" href="#files_tab" class="d-flex h-60p align-items-center nav-link active" onclick="retrive_js_data('js')">JS Files</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#files_tab" class="d-flex h-60p align-items-center nav-link" onclick="retrive_js_data('css')">CSS Files</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#upload_tab" class="d-flex h-60p align-items-center nav-link">Upload</a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="tab" href="#menu3" class="d-flex h-60p align-items-center nav-link">Script Explorer</a>
                            </li>
                        </ul>


                        <div class="tab-content">
                            <div id="files_tab" class="tab-pane show active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="table-wrap">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>File name</th>
                                                                <th>File Type</th>
                                                                <th>Created at</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="files_scripts" style="text-align: left;">

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="upload_tab" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Hello EE</h2>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary pull-right" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>


<script>
    function retrive_js_data(file_type) {
        $(".apppee").detach();
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' :  '{{csrf_token()}}' }
        });
        jQuery.ajax({
            url:'{{url('/')}}/file-manager/api/files/'+ file_type,
            type: 'GET',
            success: function( data ){

                var len = data.length;
                for(var i=0; i<len; i++){
                    $("#files_scripts").append('<tr class="apppee"><th scope="row">1</th><td>' + data[i].file_name + '</td><td>' + data[i].file_type + '</td><td>' + data[i].created_at + '</td></tr>');
                    console.log(data[i].size);
                }
            },
            error: function (xhr, b, c) {
                console.log('somethin');
            }
        });
    }

    function add_css_files(status,file_id) {
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' :  '{{csrf_token()}}' }
        });
        jQuery.ajax({
            url:'{{url('/')}}/file-manager/api/files/'+ file_type,
            type: 'POST',
            success: function( data ){

                var len = data.length;
                for(var i=0; i<len; i++){
                    $("#files_scripts").append('<tr class="apppee"><th scope="row">1</th><td>' + data[i].file_name + '</td><td>' + data[i].file_type + '</td><td>' + data[i].created_at + '</td></tr>');
                    console.log(data[i].size);
                }
            },
            error: function (xhr, b, c) {
                console.log('somethin');
            }
        });
    }

</script>

