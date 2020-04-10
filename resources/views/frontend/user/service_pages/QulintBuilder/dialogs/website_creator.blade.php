
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                Create a Website
            </div> <br>
            </p>
            <form method="post" action="{{route('frontend.user.qulint_builder.save_website')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="" style="background-image: url('{{url('/')}}/images/app_builder.jpg');height: 210px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="container">
                            <div class="form-group">
                                <label>Website name</label>
                                <input type="text" name="website_name" placeholder="Page Title" class="form-control" required>
                                <input type="hidden" name="service_id" placeholder="" class="form-control" value="{{$service_manager['service_id']}}">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select type="text" name="website_type" class="form-control" required>
                                    <option value="single_page">Single Page</option>
                                    <option value="multi_page">Multi Page</option>
                                    <option value="product_page">Product Page</option>
                                </select>
                            </div>

                            @if($service_manager['api_apps'] != null )
                                <div class="form-group">
                                    <label>Select API App</label>
                                    <select type="text" name="app_id" class="form-control" required>
                                       @foreach($service_manager['api_apps'] as $apps)
                                       <option value="{{$apps->ab_id}}">{{$apps->app_name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            @else
                                <input type="hidden" name="app_id" value="">
                            @endif



                        </div>

                    </div>
                </div>

                <div class="row" style="padding: 20px;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" placeholder="" class="form-control" value="{{$service_manager['service_id']}}" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-rounded pull-right">Create Page</button>
                </div>
            </form>
        </div>
    </div>
</div>
