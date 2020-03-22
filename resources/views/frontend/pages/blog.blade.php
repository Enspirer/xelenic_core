
@include('frontend.components.head')
<body>
@include('frontend.components.header')


    <div class="container">

         @if(count($blog_details) <= 0)
             <div class="" style="text-align: center;margin-top: 60px;padding: 40px;">
                 <div class="" style="background-image: url('FrontPage/img/page_not_found.png');height: 233px;background-size: contain;background-position: center;background-repeat: no-repeat;">
                 </div>
                 <h2 style="text-align: center;color: dimgrey">Blog posts not found</h2>
             </div>
         @else
            <div class="row" style="margin-top: 60px;">


                    <!-- Page Content -->
                        <div class="container">
                           <br> <h2>Blog</h2> <br>

                            <div class="row">

                                <!-- Blog Entries Column -->
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($blog_details as $blog)
                                            <div class="col-md-4">
                                                <div class="card" style="margin-bottom: 30px;">
                                                    <div class="" style="background-image: url('storage/blog_thumb/{{$blog->thums_img}}');height: 140px;background-position: center;background-size: cover;">

                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$blog->blog_title}}</h4>
                                                        <p class="card-text" style="overflow: hidden;height: 240px;">{{$blog->description}}</p>
                                                        <a href="#" class="btn btn-primary">Read More</a>
                                                    </div>
                                                </div>
                                            </div> <br><br>
                                        @endforeach
                                    </div>



                                </div>
                            </div>
                        </div>

                                    <!-- Pagination -->

                        <!-- /.container -->

            </div>

         @endif


    </div>


@include('frontend.components.footer')
@include('frontend.components.scripts')
</body>
</html>



