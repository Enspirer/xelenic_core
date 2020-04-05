<div id="canvas" class="tab-pane">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="" style="background-image: url('{{url('/')}}/FrontDashboard/dist/img/dash_lock.jpg');height: 300px;background-repeat: no-repeat;background-size: contain;background-position: center;">
                </div>
            </div>
            <div class="col-md-6">
                <h3>Activate AuthFact</h3> <br>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ex sed neque tempus congue.
                    Donec tristique commodo elit id aliquet. Etiam sodales id eros pulvinar molestie. Quisque a porta nisi.
                    Curabitur at gravida ligula. In a turpis in quam imperdiet tempus.Sed mi mi, porttitor a cursus nec,
                    tristique ac leo. Integer id lacinia tellus, </p><br>

                @if (auth()->user()->user_key == null)
                    <form method="POST" action="{{route('frontend.user.api_builder.activate_auth_factor')}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary btn-rounded">Activate AuthFactor</button>

                    </form>
                @else
                    <form method="POST" action="{{route('frontend.user.api_builder.deactivate_auth_factor')}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-rounded">Deactivate Auth Factor</button>

                    </form>
                @endif



            </div>
        </div>
    </div>

</div>

