
@include('frontend.components.head');
<body>
@include('frontend.components.header');
<!-- Start info Area -->
<section class="info-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-5">
                <h1 class="text-white">About</h1>
                <p class="pt-20 pb-20">
                    iCovden was founded in 2019. Provide solutions to make a business, a person or any other entity an icon in the global network.
                    From creating the business idea to promoting the business, we handle all the processes and provide the Technical support and Consultation which needed through out the journey.
                </p>
{{--                <a href="#" class="primary-btn header-btn text-uppercase">Get Customer Support</a>--}}
            </div>
        </div>
    </div>
</section>
<!-- End info Area -->

@include('frontend.components.footer');
</body>
</html>
