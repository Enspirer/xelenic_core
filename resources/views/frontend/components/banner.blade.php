<style>
    @import url(//fonts.googleapis.com/css?family=Lato:300:400);

    body {
        margin:0;
    }

    h1 {
        font-weight:300;
        letter-spacing: 2px;
        font-size:48px;
    }
    p {
        letter-spacing: 1px;
        font-size:14px;
    }

    .header {
        position:relative;
        text-align:center;
        background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
        color:white;
    }
    .logo {
        width:50px;
        fill:white;
        padding-right:15px;
        display:inline-block;
        vertical-align: middle;
    }

    .inner-header {
        height:65vh;
        width:100%;
        margin: 0;
        padding: 0;
    }

    .flex { /*Flexbox for containers*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .waves {
        position:relative;
        width: 100%;
        height:15vh;
        margin-bottom:-7px; /*Fix for safari gap*/
        min-height:100px;
        max-height:150px;
    }

    .content {
        position:relative;
        height:20vh;
        text-align:center;
        background-color: white;
    }

    /* Animation */

    .parallax > use {
        animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
    }
    .parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }
    .parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }
    .parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }
    .parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }
    @keyframes move-forever {
        0% {
            transform: translate3d(-90px,0,0);
        }
        100% {
            transform: translate3d(85px,0,0);
        }
    }
    /*Shrinking for mobile*/
    @media (max-width: 768px) {
        .waves {
            height:40px;
            min-height:40px;
        }
        .content {
            height:30vh;
        }
        h1 {
            font-size:24px;
        }
    }
</style>

<!-- start banner Area -->
<section class="" id="home" style="background: #4d90fe;padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="" style="margin-top: 60px;font-size: 53px;line-height: normal;color: white;font-weight: 600;padding: 10px;">
                   {{xelenic_settings('homepage_banner_head')}}
                </div>
                <p style="color: white;">
                    {{xelenic_settings('homepage_banner_text')}}
                </p>
                <a class="btn btn-primary pull-right" style="color: white">Get started</a>
            </div>
            <div class="col-md-6">
                <div class="" style="background-image: url('FrontPage/img/{{xelenic_settings('banner_image')}}');height: 396px;background-repeat: no-repeat;background-position: center;background-size: contain;margin-top: 60px;">

                </div>
            </div>
        </div>
    </div>

    <div class=" flex">

    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->

</section>
<!-- End banner Area -->