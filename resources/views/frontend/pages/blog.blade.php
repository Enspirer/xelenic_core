
@include('frontend.components.head');
<body>
@include('frontend.components.header');


    <div class="container">

         @if(count($blog_details) >= 0)
             <div class="" style="text-align: center;margin-top: 60px;padding: 40px;">
                 <h2 style="text-align: center;">Hleome</h2>

             </div>

         @else
            <div class="row">
                @foreach($blog_details as $blog)
                    <div class="col-md-4">
                        <div class="card" style="margin-top: 10px;margin-bottom: 10px;">
                            <div class="card-header" style="background-image: url('https://e3.365dm.com/20/03/768x432/skynews-coronavirus-italy-hospital_4946885.jpg');height: 300px;background-size: cover;">
                            </div>
                            <div class="card-body">
                                <h2 style="padding-top: 10px;padding-bottom: 16px;">Hellome Mlinemes</h2> <br>
                                <p>BBC World News is an international pay television
                                    channel that is operated by BBC. The BBC is a
                                    public corporation of the UK government's Department
                                    for Digital, Culture, Media and Sport</p>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="margin-bottom: 0px;">Date: 2020/03/02</p>
                                        <p>By Sanjaya Senevirathne</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary pull-right" style="color: white;">Read More</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

         @endif


    </div>


@include('frontend.components.footer');
</body>
</html>



