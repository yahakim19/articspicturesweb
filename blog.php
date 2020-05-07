<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Blog</title>

    <!-- <link rel="icon" href="assets/images/favico/favicon-16x16.png" type="image/gif" sizes="16x16"> -->
    <link rel="shortcut icon" href="assets/images/favico/favicon-16x16.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    <!-- <link rel="stylesheet" href="assets/css/gallery.css"> -->
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

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.php">About </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="gallery.php">Gallery </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="blog.php">Blog <span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contactus.php">Contact Us </a>
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

    <main role="main" class="container">

        <!-- <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>

      </div>
    </section> -->

        <div class="album ">
            <div class="container ">

                <div class="row ">
                    <div class="container" style="padding:30px;">
                        <div id="myBtnContainer">
                            <button style="margin:5px;" onclick=" filterSelection('all')" class="btn btn-outline-dark">Latest</button>
                            <button style="margin:5px;" onclick="filterSelection('g')" class="btn btn-outline-secondary">Location</button>
                            <button style="margin:5px;" onclick="filterSelection('pw')" class="btn btn-outline-secondary">Photo Session</button>
                            <button style="margin:5px;" onclick="filterSelection('others')" class="btn btn-outline-secondary">Others</button>
                        </div>

                    </div>

                    <div class=" col-md-9">
                        <div class="container border" style="padding: 30px;">

                            <h3 class=" display-3">Latest Post</h3>


                            <div class="card" style="padding: 10px;margin: 10px;">
                                <h4 class="display-4">TITLE HEADING</h4>
                                <div>
                                    <ul class="list-inline list-unstyled">
                                        <li id="postTag" class="lead">Tags</li>
                                        <li id="postDate" class="lead">12/12/19</li>
                                    </ul>
                                </div>
                                <div class="img-thumbnail" style="height:200px;"></div>
                                <p>Some text..</p>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <a href="#" class="text-right text-muted">Read more</a>
                            </div>

                            <div class="card" style="padding: 10px; margin: 10px;">
                                <h4 class="display-4">TITLE HEADING</h4>
                                <div>
                                    <ul class="list-inline list-unstyled">
                                        <li id="postTag" class="lead">Tags</li>
                                        <li id="postDate" class="lead">12/12/19</li>
                                    </ul>
                                </div>

                                <div class="img-thumbnail" style="height:200px;"></div>
                                <p>Some text..</p>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <a href="#" class="text-right text-muted">Read more</a>
                            </div>

                        </div>

                        <!-- pagination  -->

                        <div>
                            <ul class="pagination justify-content-center" style="margin-top: 10px;">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item "><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>

                        <!-- pagination end -->

                    </div>

                    <div class=" col-md-3 container " style="padding: 10px;">
                        <!-- advertisement -->
                        <aside>

                            <h4 class="text-center" style="margin:10px;">Popular Post</h4>

                            <div class="container card border" style="margin-top: 10px">
                                <img class="img-thumbnail rounded " src="assets/images/graduation.jpg" alt="AAAA">
                                <h5>Title</h5>
                                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id velit vel magna scelerisque aliquam.</p>
                                <a href="#" class="text-right">Continue reading >>></a>
                            </div>

                            <hr class="featurette-divider">

                            <div class="container card border" style="margin-top: 10px">
                                <img class="img-thumbnail rounded " src="assets/images/graduation.jpg" alt="AAAA">
                                <h5>Title</h5>
                                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id velit vel magna scelerisque aliquam.</p>
                                <a href="#" class="text-right">Continue reading >>></a>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>


    </main>


    <!-- FOOTER -->
    <footer class="container jumbotron col-md-12" style="margin: 20px 0 0 0;">

        <p class="float-right"><a href="#">Top</a></p>

        <p class="text-center">&copy; Hactiv8 FWDB Final Assignment. </p>
    </footer>



</body>


</html>