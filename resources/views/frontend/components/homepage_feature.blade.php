
<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Some Features that Made us Unique</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">

            @if(xelenic_settings('homepage_feature_data') != null)
                @foreach(xelenic_settings('homepage_feature_data') as $helcome)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service">
                            <h4><span class="{{$helcome->icon}}"></span>{{$helcome->head}}</h4>
                            <p>
                                {{$helcome->description}}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End service Area -->