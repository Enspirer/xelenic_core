
@include('frontend.components.head')
<body>
@include('frontend.components.header')


@if(xelenic_settings('banner_section') == '1')
    @include('frontend.components.banner')
@elseif(xelenic_settings('banner_section') == '0')

@else

@endif


@if(xelenic_settings('homepage_partner_logo_section') == '1')
    @include('frontend.components.partner_logo')
@elseif(xelenic_settings('homepage_partner_logo_section') == '0')

@else

@endif

@if(xelenic_settings('homepage_block_1') == '1')
    @include('frontend.components.description_block')
@elseif(xelenic_settings('homepage_block_1') == '0')

@else

@endif



@if(xelenic_settings('homepage_feature_section') == '1')
    @include('frontend.components.homepage_feature')
@elseif(xelenic_settings('homepage_feature_section') == '0')

@else

@endif









@if(xelenic_settings('homepage_custom_solution_section') == '1')
    @include('frontend.components.custom_solution')
@elseif(xelenic_settings('homepage_custom_solution_section') == '0')

@else

@endif




<!-- Start faq Area -->
<section class="faq-area section-gap" id="faq" style="">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Features That make us Unique</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="counter-left col-lg-3 col-md-3">
                <div class="single-facts">
                    <h2 class="counter">5962</h2>
                    <p>Projects Completed</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">2394</h2>
                    <p>New Projects</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">1439</h2>
                    <p>Tickets Submitted</p>
                </div>
                <div class="single-facts">
                    <h2 class="counter">933</h2>
                    <p>Cup of Coffee</p>
                </div>
            </div>
            <div class="faq-content col-lg-9 col-md-9">
                <div class="single-faq">
                    <h2>
                        Are your Templates responsive?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Does it have all the plugin as mentioned?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
                <div class="single-faq">
                    <h2>
                        Can i use the these theme for my client?
                    </h2>
                    <p>
                        “Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End faq Area -->


<!-- start contact Area -->

<!-- end contact Area -->




@include('frontend.components.footer')
@include('frontend.components.scripts')
</body>
</html>



