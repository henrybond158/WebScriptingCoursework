<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brodick Castle - Henry Bonds Web Scripting Coursework</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="index.php">Brodick Castle</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.php">About</a>
                    </li>
                    <li><a href="services.php">Opening Hours</a>
                    </li>
                    <li><a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-home-1.php">Blog Home 1</a>
                            </li>
                            <li><a href="blog-home-2.php">Blog Home 2</a>
                            </li>
                            <li><a href="blog-post.php">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            </li>
                            <li><a href="pricing.php">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h1>Modern Business - A Bootstrap 3 Template</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h1>Ready to Style &amp; Add Content</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h1>Additional Layout Options at <a href="http://startbootstrap.com">http://startbootstrap.com</a>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-check-circle"></i> Built 1510 </h3>
                    <p>Built in 1510 by the Earl of Arran, James Hamiliton to be a tower house</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-pencil"></i> Suffered under religious battle </h3>
                    <p> In the mid 1600s,  the castle was lostArchibald Campbell, 1st Marquess of Argyll, whom was the ruler of Scotland under the presbyterian faction, Argyll sezied Brodick Castle from Hamilton. The castle was returned to Hamilton in 1643 the following year</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-folder-open"></i> Now owned by the National Trust for Scotland</h3>
                    <p>The Castle and Gardens were acquired by the National Trust for Scotland in 1958, please read History page for a more in-depth look on the Castles' history</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Modern Business: A Clean &amp; Simple Full Website Template by Start Bootstrap</h2>
                    <p>A complete website design featuring various single page templates from Start Bootstraps library of free php starter templates.</p>
                    <hr>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Display Some Work on the Home Page Portfolio</h2>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.php">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc">
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="container">

        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>'Modern Business' is a ready-to-use, Bootstrap 3 updated, multi-purpose php theme!</h4>
                <p>For more templates and more page options that you can integrate into this website template, visit Start Bootstrap!</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="http://startbootstrap.com">See More Templates!</a>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>This scripting on this page is the work of Henry Bond, all images are originals or are taken from Brodick Castles own website. Educational Website</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</php>
