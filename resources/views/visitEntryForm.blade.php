<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Axxess</title>

        <link href="https://media.licdn.com/dms/image/C560BAQHqGzZmMZa7oQ/company-logo_200_200/0?e=2159024400&v=beta&t=JgSa5UbMOaLLQ3m_SwpdEDseT3DvljvVrYVInZEoSWk" rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="{{url('css/style.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </head>

    <body>
    <div class="click-closed"></div>

   <!--/ Nav Star /-->
   <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                    aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.php">
                <img src="https://media.licdn.com/dms/image/C560BAQHqGzZmMZa7oQ/company-logo_200_200/0?e=2159024400&v=beta&t=JgSa5UbMOaLLQ3m_SwpdEDseT3DvljvVrYVInZEoSWk" width="100" height="100"/>
                <span class="color-b">A<span class="color-e">xx</span>ess</span></a>
            <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                    data-target="#navbarTogglerDemo01" aria-expanded="false">
                <span class="fa fa-search" aria-hidden="true"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" href="{{url('/signup')}}">SignUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/upcoming')}}">Upcoming Visits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/visit')}}">Visit Form</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/api/missed')}}">Missed Api</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!--/ Nav End /-->

    <div class="container section-t8">
            <h3>Please Enter Patient Visit Details</h3>
    <form class="form" action="visitSave" method="post" id="userProfileForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="id"><strong>Patient Id:</strong></label>
                        <input type="text" class="form-control" name="patient_id" placeholder="Enter an id" value="" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="age"><strong>Visit Date:</strong></label>
                        <input type="date" class="form-control" name="visit_date" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                            <br>
                            <br>
                            <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                 
                    </div>
                </div>
                
            </form>

    </div>


    <!--/ footer Star /-->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">Axxess</h3>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                Leading financial services company and pioneer in the online stock sales industry. Itâ€™s the platform for traders passionate about the markets. Intuitive and easy-to-use. Packed with opportunity-finding and market-seizing tools and features.
                            </p>
                        </div>
                        <div class="w-footer-a">
                            <ul class="list-unstyled">
                                <li class="color-a">
                                    <span class="color-text-a">Phone </span> +1 (123)456-7890 </li>
                                <li class="color-a">
                                    <span class="color-text-a">Email </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">The Company</h3>
                        </div>
                        <div class="w-body-a">
                            <div class="w-body-a">
                                <ul class="list-unstyled">
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                    </li>
                                    <li class="item-list-a">
                                        <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <h3 class="w-title-a text-brand">International sites</h3>
                        </div>
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">India</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">America</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Canada</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Germany</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">China</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Property</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Blog</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-dribbble" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ Footer End /-->




    </body>
    </html>


