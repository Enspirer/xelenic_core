
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
            <div class="row">


                    <!-- Page Content -->
                        <div class="container">

                            <div class="row">

                                <!-- Blog Entries Column -->
                                <div class="col-md-8">

                                    <h1 class="my-4">Blog</h1>
                                @foreach($blog_details as $blog)
                                    <!-- Blog Post -->
                                    <div class="card mb-4">
                                        <div class="" style="background-image: url('storage/blog_thumb/{{$blog->thums_img}}');height: 140px;b">

                                        </div>
                                        <div class="card-body">
                                            <h2 class="card-title">{{$blog->blog_title}}</h2>
                                            <p class="card-text">{{$blog->description}}</p>
                                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Posted on January 1, 2017 by
                                            <a href="#">Start Bootstrap</a>
                                        </div>
                                    </div>

                                @endforeach

                                    <!-- Pagination -->
                                    <ul class="pagination justify-content-center mb-4">
                                        <li class="page-item">
                                            <a class="page-link" href="#">&larr; Older</a>
                                        </li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">Newer &rarr;</a>
                                        </li>
                                    </ul>

                                </div>

                                <!-- Sidebar Widgets Column -->
                                <div class="col-md-4">

                                    <!-- Search Widget -->
                                    <div class="card my-4">
                                        <h5 class="card-header">Search</h5>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Categories Widget -->
                                    <div class="card my-4">
                                        <h5 class="card-header">Categories</h5>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <a href="#">Web Design</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">HTML</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Freebies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <a href="#">JavaScript</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">CSS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tutorials</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Side Widget -->
                                    <div class="card my-4">
                                        <h5 class="card-header">Side Widget</h5>
                                        <div class="card-body">
                                            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.container -->

            </div>

         @endif


    </div>


@include('frontend.components.footer')
@include('frontend.components.scripts')
</body>
</html>



