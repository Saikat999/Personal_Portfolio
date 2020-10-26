<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <title>Portfolio</title>
</head>

<body>
    <!-- Start Navbar -->
    <section class="header">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Portfo<span class="brand1">lio</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">
                        <div class="navbar-nav">

                            <a class="nav-item nav-link active" href="#">Home</a>
                            <a class="nav-item nav-link" href="#">About</a>
                            <a class="nav-item nav-link" href="#">Work</a>
                            <a class="nav-item nav-link" href="#">Skills</a>
                            <a class="nav-item nav-link" href="#">Contact</a>

                        </div>
                    </ul>
                </div>

            </div>
        </nav>

    </section>
    <!-- End Navbar -->

    <!-- Start Home Section -->
    <section class="home">
        <div class="container">
            <div class="row">

                <div class="col-md-6 text">
                    <h5>Hello, My name is</h5>
                    <h2>Md. Saikat Hasan</h2>
                    <h4>And I'm a <span class="text-danger">Web Developer</span></h4><br>
                    <a href="" type="button" class="btn btn-danger btn-lg">About Me</a>
                </div>
                <div class="col-md-6 how-img">
                    <img src="../image/profile-1.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Section -->

    <!-- Start About section -->
    <section class="about">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">About me</h2>
            <h5 class="text-center text-danger">--Who I am--</h5>
            <div class="row">
                <div class="col-md-5 profile">
                    <img src="../image/profile-about2.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-7 about-me">
                    <h4 class="font-weight-bold">I'm Saikat and I'm a <span class="text-danger">Web Developer</span>
                    </h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum</p>
                    <a href="" type="button" class="btn btn-danger btn-lg">Download CV</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End About section -->

    <!-- Start Work section -->
    <section class="work">
        <div class="container">
            <h2 class="text-center text-white font-weight-bold">My Works</h2>
            <h5 class="text-center text-danger">--What I have done--</h5>
            <!-- <div class="row"> -->
                <div class="card-deck">
                    <div class="card">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">Online CV Maker</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                           
                        </div>
                    </div>
                    <div class="card">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">Restaurant Gallery</h5>
                            <p class="card-text text-justify">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                            
                        </div>
                    </div>
                    <div class="card">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">Air Quality Monitoring</h5>
                            <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                            
                        </div>
                    </div>
                  
                </div>


            <!-- </div> -->
        </div>
    </section>
    <!-- End Work section -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>