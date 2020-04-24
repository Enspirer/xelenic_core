<div class="tab-pane fade" role="tabpanel" id="files">
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>File Id</th>
                            <th>File name</th>
                            <th>Type</th>
                            <th>File Size</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($get_files as $files)
                                <tr>
                                    <th scope="row">{{$files->file_id}}</th>
                                    <td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 0px;">{{$files->file_name}}</td>
                                    <td>{{$files->file_type}}</td>
                                    <td>{{$files->size}}KB</td>
                                    <td>{{$files->created_at}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <svg class="css-peity">
                        <defs>
                            <linearGradient id="grad" gradientTransform="rotate(90)">
                                <stop offset="0" stop-color="#7fd5f7"></stop>
                                <stop offset="1" stop-color="rgba(255,255,255,0)"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>