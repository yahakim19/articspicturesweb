<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <a class="navbar-brand" href="#">Artics Pictures</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">About </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Gallery </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Blog </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Contact Us </a>
                    </li>
                </ul>

                <div class="row float-right" style="margin-right: 10px;">

                    <a href="#" class="fa fa-pinterest" style="margin-right: 10px;"></a>
                    <a href="#" class="fa fa-instagram" style="margin-right: 10px;"></a>

                </div>




            </div>


        </nav>
        <!-- navbar end -->

    </header>

    <!-- Promotion and Update -->
    <section class="container col-md-11" style="margin-top: 10px;">
        <!-- <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">We`ll shot your best  moment</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>s
        </div>
         -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Artics Pictures</h1>
                <p class="lead">"Today everything exists to end in a photograph"</p>
                <p class="lead">-Susan Sontag-</p>

            </div>
        </div>


    </section>

    <!-- Promotion and Update end -->

    <!-- Choose Packages -->



    <section class="container border" style="padding: 10px;">

        <h3 class="text-center display-4" style="margin: 10px 0 15px 0;"> Packages </h3>


        <div class="row">


            <div class="col-sm-6">
                <div class="card">
                    <img class="card-img-top img-thumbnail" style="height: 300px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Graduation image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Graduation Packages</h5>
                        <p class="card-text">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Praesent consectetur sapien sit amet egestas ultrices</li>
                                <li>In eleifend nisl id ultricies sodales</li>
                            </ul>
                        </p>
                        <!-- <a href="#" class="btn btn-primary float-right">Book Now</a> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Graduation">Book Now</button>

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


                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <img class="card-img-top img-thumbnail" style="height: 300px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Prewedding image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Prewedding Packages</h5>
                        <p class="card-text">
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Praesent consectetur sapien sit amet egestas ultrices</li>
                                <li>In eleifend nisl id ultricies sodales</li>
                            </ul>
                        </p>
                        <!-- <a href="#" class="btn btn-primary float-right">Book Now</a> -->
                        <!-- Small modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Pre Wedding">Book Now</button>


                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Order Form</h5>
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

                    </div>
                </div>
            </div>

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
                <img class="featurette-image img-fluid mx-auto" data-src="" alt="Generic placeholder image">
            </div>
        </div>

        <!-- Small modal -->
        <button type="button" class="btn btn-primary col-sm-6" data-toggle="modal" data-target=".bd-example-modal-sm">Custom</button>

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

    <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer class="container jumbotron col-md-12" style="margin: 20px 0 0 0;">

        <p class="float-right"><a href="#">Top</a></p>

        <p class="text-center">&copy; Hactiv8 FWDB Final Assignment. </p>
    </footer>
    <script src="javascript/index.js"></script>
</body>

</html>