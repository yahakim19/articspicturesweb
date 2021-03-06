<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- fav incon -->

    <link rel="icon" href="assets/images/favico/favicon-16x16.png" type="image/gif" sizes="16x16">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/home.css">

    <!-- css script  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Social Button Library -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <!-- navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/images/favico/favicon-32x32.png" alt="brand logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="about.php">About </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="gallery.php">Gallery </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="blog.php">Blog </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="contactus.php">Contact Us </a>
                    </li>
                </ul>

                <div class="row float-right" style="margin-right: 10px;">

                    <a href="#" class="fa fa-pinterest" style="margin-right: 10px;"></a>
                    <a href="https://www.instagram.com/articspictures/" class="fa fa-instagram" style="margin-right: 10px;"></a>

                </div>




            </div>


        </nav>


    </header>

    <!-- navbar end -->

    <!-- Promotion and Update -->
    <section class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="assets/images/PromoBanner/BannerPromo.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="assets/images/PromoBanner/BannerPromo2.jpg" alt="Second slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>




    </section>

    <!-- Promotion and Update end -->

    <!-- Choose Packages -->



    <section class="container border" style="padding: 10px;">

        <h3 class="text-center display-4" style="margin: 10px 0 15px 0;"> Packages </h3>


        <div class="row">


            <div class="col-sm-6">
                <div class="card">
                    <img class="card-img-top img-thumbnail" style="height: 300px;" src="assets/images/graduation.jpg" alt="Graduation image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Graduation</h5>
                        <p class="card-text">
                            <ul class="list-unstyled mt-3 mb-4 text-center">
                                <li>1 Hour session</li>
                                <li>30 Edited Photo</li>
                                <li>Printed 10 RS (3 pcs)</li>
                                <li>Printed Photo 12R (1 pcs)</li>
                                <li>Frame Cinematic 1 - 3 Minutes</li>
                                <li>Potrait Video 30 Second</li>
                            </ul>
                            <h4 class="text-center display 5">IDR 799K </h4>
                        </p>
                        <!-- <a href="#" class="btn btn-primary float-right">Book Now</a> -->
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="Graduation">Book Now</button>


                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">

                    <img class="card-img-top img-thumbnail" style="height: 300px;" src="assets/images/prewedding3.jpg" alt="Prewedding image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Prewedding </h5>
                        <p class="card-text">
                            <ul class="list-unstyled mt-3 mb-4 text-center">
                                <li>1 Day outdoor session</li>
                                <li>3 Location</li>
                                <li>80 Edited Photo</li>
                                <li>Pre Wedding Photobook 21x15cm 56pgs</li>
                                <li>2 Printed Photo 40x60cm</li>
                                <li>Cinematic Prewedding</li>
                            </ul>
                            <h4 class="text-center display 5">IDR 6.000K </h4>
                        </p>



                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="Prewedding">Book Now</button>

                    </div>
                </div>
            </div>
            <!-- Form with modal  -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="#">Order Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-package" class="col-form-label">Package:</label>
                                    <input type="text" class="form-control" id="recipient-package" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Order Date:</label>
                                    <input type="date" class="form-control" id="recipient-date">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Phone:</label>
                                    <input type="tel" class="form-control" id="recipient-phone" placeholder="08xx">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-email" placeholder="email@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text" placeholder="Let us know what you need"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form with modal end  -->
        </div>
    </section>

    <!-- Choose Packages End -->

    <!-- Others -->
    <section class="container card" style="margin-top: 30px;padding: 30px;">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Custom Packages</h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>

            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="assets/images/custom.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <!-- Small modal -->
        <button style="margin-top: 10px" type="button" class="btn btn-primary col-sm-6" data-toggle="modal" data-target=".bd-example-modal-sm">Describe Now</button>

        <div class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <!-- Form Book -->
                    <div class="modal-header">
                        <h5 class="modal-title">Form Booking</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="col-form-label">Name:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Order Date:</label>
                                <input type="date" class="form-control" id="recipient-date">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Phone:</label>
                                <input type="tel" class="form-control" id="recipient-phone" placeholder="08xx">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="recipient-email" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text" placeholder="Describe what you need, and we`ll send our offers"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
        </div>


    </section>


    <!-- Others  End-->

    <!--  -->

    <!-- FOOTER -->
    <footer class="container jumbotron col-md-12" style="margin: 20px 0 0 0;">

        <p class="float-right"><a href="#">Top</a></p>

        <p class="text-center">&copy; Hactiv8 FWDB Final Assignment. </p>
    </footer>



    <script src="javascript/index.js"></script>
</body>

</html>