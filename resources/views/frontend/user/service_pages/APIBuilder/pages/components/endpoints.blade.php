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

                    <p>Dashgrin is a Bootstrap 4.X.X &amp; Sass based solid core framework that works well for all screen sizes and modern browsers.  HTML5 validated clean code is focused - keeping it simple and orderly. With Dashgrin's UI components library, you can actually get more time on building stuff, rather than editing pixel distances.
                        Dashgrin - HTML template and Admin UI kit can be used for any type of web application: CRM, Project Management, Statistics, Analytics or any custom admin dashboard.
                        This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p><br><br>

                    <h5 class="hk-sec-title">API Endpoints</h5>

                </section>
           @endif
        </div>

    </div>
</div>
