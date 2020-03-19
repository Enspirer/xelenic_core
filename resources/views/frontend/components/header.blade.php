
<header id="header" id="home" style="background-color: rgb(77, 144, 254) !important;padding-bottom: unset;position: fixed;width: -webkit-fill-available;z-index: 3;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: #4d90fe !important;">
            <a class="navbar-brand" href="#">icovden</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: max-content;">
                            <div class="row" style="padding: 14px;">
                                <div class="col-md-6" style="font-size: 12px;text-align: center;width: 370px;">
                                    <div style="background-image: url('FrontPage/img/rocket.jpg');height: 190px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                    Lorposi ipsume data mapake Lorposi ipsume data mapakeLorposi ipsume data mapake Lorposi ipsume data mapake
                                </div>
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="/about">Animtrap</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/about/team">Quilint</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Engaller</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Feedbird</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">CMonitor</a>
                                    <div class="dropdown-divider">ProdMov</div>
                                    <a class="dropdown-item" href="#">Pentoa Server</a>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Partners</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: max-content;">
                            <div class="row" style="padding: 14px;">
                                <div class="col-md-6" style="font-size: 12px;text-align: center;width: 370px;">
                                    <div style="background-image: url('FrontPage/img/rocket.jpg');height: 190px;background-size: contain;background-position: center;background-repeat: no-repeat;"></div>
                                    Lorposi ipsume data mapake Lorposi ipsume data mapakeLorposi ipsume data mapake Lorposi ipsume data mapake
                                </div>
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="/about">About</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/about/team">Team</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Careers</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Events</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Community</a>
                                    <div class="dropdown-divider"></div>
{{--                                    <div class="dropdown-divider"></div>--}}
                                    <a class="dropdown-item" href="#">Research</a>
                                </div>
                            </div>

                        </div>
                    </li>
                    

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 15px;background: #2c59ff;border-color: #4d90fe;color: white;">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>



</header><!-- #header -->

<script>
    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }


</script>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>