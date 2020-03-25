
@include('frontend.components.head')
<body>
@include('frontend.components.header')

<!-- Header -->
<header class="w3-container  w3-center" style="padding:128px 16px; background-color: #4d90fe ">
    <h1 class="w3-margin w3-jumbo">ABOUT</h1>
    <p class="w3-xlarge" style="color: white;">We Believe in Icons</p>
{{--    <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>--}}
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content" >
        <div class="w3-twothird"style="padding-top: 100px">
            <h1>We Believe in Icons</h1>
            <h5 class="w3-padding-32">iCovden  is a Sri Lankan startup mindset providing next level IT solution and business consulting for clients to become
                an icon in the local and global IT and business world.
                </h5>

            <p class="w3-text-grey">With our expertise and out of the box thinking mind in IT and business consulting we are able to give a life for your business idea.
                Delivering the best, quality and high-level services for your business journey we will be your successor by creating a business idea, consulting, guiding technical supporting and promoting the business using next-level marketing strategies.</p>
        </div>

        <div class="w3-third w3-center">
            <img src="/img/frontend/about/3.jpg" height="550px" width="450px" alt="image" style="padding-left: 30px">
        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
            <h1>Lorem Ipsum</h1>
            <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

            <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

@include('frontend.components.footer')
@include('frontend.components.scripts')
</body>
</html>
