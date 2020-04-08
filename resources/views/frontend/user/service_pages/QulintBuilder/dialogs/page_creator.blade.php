
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                Create App
            </div> <br><br>
            <form method="post" action="{{route('frontend.user.api_builder.create_app')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="" style="background-image: url('{{url('/')}}/images/app_builder.jpg');height: 210px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="container">
                            <h4>Web Page Creator</h4><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim urna id n
                                isi volutpat fringilla. Morbi sagittis feugiat congue. Fusce tincidunt ante tempor leo
                                laoreet, non iaculis massa congue. Etiam eget est tellus. Donec id consectetur neque,
                                non mattis sem. Nam tempus imperdiet vulputate. Proin scelerisque eget est vel rhoncus.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="row" style="padding: 20px;">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>App Name</label>
                            <input type="text" name="app_name" placeholder="App name" class="form-control">
                            <input type="hidden" name="service_id" placeholder="App name" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-rounded pull-right">Make APP</button>
                </div>
            </form>
        </div>
    </div>
</div>
