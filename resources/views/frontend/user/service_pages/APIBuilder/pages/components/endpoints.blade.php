<div id="builder_api_endpoints" class="tab-pane">
    <div class="row">
        <div class="col-xl-12">
           @if (auth()->user()->user_key == null)
                @if ($authfaction == null)
                    <h3 style="color: grey;text-align: center">Install AuthFactor Service</h3>
                @else
                    <h3 style="color: grey;text-align: center">AuthFactor not active</h3>
                @endif
           @else
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Introduction <span style="text-transform: capitalize">{{$get_app_details->app_name}}</span> API</h5>

                    <p><span style="color: green;text-transform: capitalize">{{$get_app_details->app_name}}</span> is a API Builder application.Your APIs Service interface
                        Dynamically generate RESTful APIs from the contents of a database table. Provides JSON, XML, and HTML. Supports most popular databases.Creating an API
                        to access information within existing database tables is laborious task, when done as a bespoke task. This is often dealt with by exporting the contents
                        of the database as CSV files, and providing downloads of them as a “good enough” solution.</p><br><br>

                    <h5 class="hk-sec-title">API Endpoints Authentication with AuthFactor<span style="font-size: 11px;">®</span></h5>

                    <p>You need to be authenticated for all API requests.API keys are supposed to be a secret that only the client and server know. Like Basic authentication,
                        API key-based authentication is only considered secure if used together with other security mechanisms such as HTTPS/SSL.</p><br><br>
                    <input type="text" class="form-control" placeholder="Rounded Input" value="{{auth()->user()->user_key}}" disabled>  <br><br>


                    <h5 class="hk-sec-title">Erros</h5>

                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="badge badge-primary">200</span> </td>
                                                <td>OK</td>
                                                <td>The request was successfully completed.</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-primary">201</span> </td>
                                                <td>Created</td>
                                                <td>Creation Successful</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-danger">400</span> </td>
                                                <td>Bad Request	</td>
                                                <td>We could not process that action</td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-danger">403</span> </td>
                                                <td>Forbidden</td>
                                                <td>We couldn’t authenticate you</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <br><br>





                    <p>All errors will return JSON in the following format:</p> <br>

                    <pre class="bg-violet-light-5 pt-25" style="">
                       {
                          "message": "error message here"
                       }
                    </pre>
                    <br>

                    <h5><span style="text-transform: capitalize">{{$get_app_details->app_name}}</span>'s Tables</h5> <br>

                    <div class="accordion accordion-type-2" id="accordion_2">
                        @foreach($get_cloud_table as $tables_q)
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <a role="button" data-toggle="collapse" href="#collapse_1i_{{$tables_q->table_id}}" aria-expanded="false" class="collapsed">{{$tables_q->table_name}}</a>
                                </div>
                                <div id="collapse_1i_{{$tables_q->table_id}}" class="collapse" data-parent="#accordion_2" role="tabpanel" style="">
                                    <div class="card-body pa-15">
                                        <div class="">
                                            <h5 class="hk-sec-title" style="font-size: 16px;">Table Fields</h5>
                                            <div class="table-responsive">
                                                <table class="table table-light table-bordered mb-0">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        @foreach($getdata_field_app as $field_data)
                                                            @if($field_data->table_id == $tables_q->table_id)
                                                                <th>{{$field_data->field_name}}</th>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                    </tr>
                                                </table>
                                            </div> <br><br>
                                            <h5 class="hk-sec-title" style="font-size: 16px;"><span style="color: forestgreen">'{{$tables_q->table_name}}'</span> Table Endpoints</h5>
                                            <p>Thingerbits is a API Builder application.Your APIs Service interface Dynamically generate
                                                RESTful APIs from the contents of a database table. Provides JSON, XML, and HTML. Supports most
                                                popular databases.Creating an API to access information within existing database tables is laborious
                                                task, when done as a bespoke task. This is often dealt with by exporting the contents of the database
                                                as CSV files, and providing downloads of them as a “good enough” solution.</p>
                                            <br>
                                            <h4 style="font-size: 15px;">GET Table Details</h4> <br>
                                            <div class="" style="background: darkslategray;color: yellow;padding: 20px;">
                                               {{url('/')}}/api/cloud_service/get_tables/{{$get_app_details->key}}/{{$tables_q->key}}
                                            </div><br>

                                            <h4 style="font-size: 15px;">GET Fields Endpoint</h4> <br>
                                            <div class="" style="background: darkslategray;color: yellow;padding: 20px;">
                                                {{url('/')}}/api/cloud_service/get_tables/{{$get_app_details->key}}}/{{$tables_q->key}}/get-fields
                                            </div><br>

                                            <h4 style="font-size: 15px;">GET Fields Endpoint</h4> <br>
                                            <div class="" style="background: darkslategray;color: yellow;padding: 20px;">
                                                {{url('/')}}/api/cloud_service/get_tables/{{$get_app_details->key}}}/{{$tables_q->key}}/get-data-records
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </section>
           @endif
        </div>

    </div>
</div>
