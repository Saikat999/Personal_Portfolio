<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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
        <div class="back">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 text">
                        <h5>Hello, My name is</h5>
                        <h2>Md. Saikat Hasan</h2>
                        <h4>And I'm a <span class="text-danger">Web Developer</span></h4><br>
                        <a href="" type="button" class="btn btn-danger btn-lg">About Me</a>
                    </div>
                    <!-- <div class="col-md-6 how-img">
                    <img src="../image/profile-1.png" class="img-fluid" alt="" />
                </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Section -->

    <!-- Start About section -->
    <section class="about">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">About Me</h2>
            <h5 class="text-center text-danger">--Who I am--</h5>
            <div class="row">
                <div class="col-md-5 profile">
                    <img src="../image/profile-5.jpg" class="img-fluid" alt="" />
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
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title text-center font-weight-bold">Online CV Maker</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a
                                natural
                                lead-in
                                to additional content. This content is a little bit longer.</p>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title text-center font-weight-bold">Restaurant Gallery</h5>
                            <p class="card-text text-justify">This card has supporting text below as a natural lead-in
                                to
                                additional
                                content.</p>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title text-center font-weight-bold">Air Quality Monitoring</h5>
                            <p class="card-text text-justify">This is a wider card with supporting text below as a
                                natural
                                lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </a>

                    </div>
                </div>

            </div>


            <!-- </div> -->
        </div>
    </section>
    <!-- End Work section -->

    <!-- Start Skills section -->
    <section class="skill">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">My Skills</h2>
            <h5 class="text-center text-danger">--What I know--</h5>
            <div class="row">

                <div class="col-md-6 skill-text">
                    <h4 class="font-weight-bold">My Creative <span class="text-danger">Skills</span> & <span
                            class="text-danger">Experiences</span>
                    </h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum</p>
                    <a href="" type="button" class="btn btn-danger btn-lg">Read more</a>
                </div>

                <div class="col-md-6 skill-lang">
                    <div class="skill-item">
                        <h6>C programming</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">Java</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">JavaScript</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">PHP</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">Laravel8</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%
                            </div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <h6 class="heading">HTML5</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">CSS3</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">Bootstrap-4</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%
                            </div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <h6 class="heading">jquery</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%
                            </div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6 class="heading">MySQL</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </section>
    <!-- End Skills section -->

    <!-- Start Contact section -->
    <section class="contact">
        <div class="container">
            <h2 class="text-center text-white font-weight-bold">Contact Me</h2>
            <h5 class="text-center text-danger">--Get in touch--</h5>
            <div class="row">
                <div class="col-md-6 find-me">
                    <h4>Get in touch</h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                    <a href="" type="button" class="btn btn-fb bg-primary text-white"><i
                            class="fab fa-facebook-f pr-1"></i> Facebook</a>
                    <a href="" type="button" class="btn btn-ins bg-danger text-white"><i
                            class="fab fa-instagram pr-1"></i> Instagram</a>
                    <a href="" type="button" class="btn btn-li bg-info text-white"><i
                            class="fab fa-linkedin-in pr-1"></i> Linkedin</a>
                    <a href="" type="button" class="btn btn- bg-dark text-white"><i class="fab fa-github pr-1"></i>
                        Github</a>

                </div>
                <div class="col-md-6 send-msg">
                    <h4>Message me</h4>
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Name" id="usr"> </div>
                    <div class="form-group"> <input type="email" class="form-control" placeholder="Email" id="pwd">
                    </div>
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Subject" id="usr">
                    </div>
                    <div class="form-group"> <textarea class="form-control" rows="5" id="comment"
                            placeholder="Message.."></textarea> </div>
                    <div class="form-group"> <button type="submit" class="btn btn-danger">Send message</button> </div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- End Contact section -->

    <!-- Start Footer section-->
    <footer class="page-footer font-small bg-secondary">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Created By <a href="#" class="text-warning">Saikat Hasan
            </a> | © 2020 All rights reserved. </div> <!-- Copyright -->
    </footer>
    
    <!-- End Footer Section -->




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>