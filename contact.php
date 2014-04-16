<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Brodick Castle</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- a cool project which is a CAPTCHA replacement to reduce spam -->
    <link rel="stylesheet" href="css/jquery.motionCaptcha.0.2.css"/>
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
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio-1-col.php">1 Column Portfolio</a></li>
                <li><a href="portfolio-2-col.php">2 Column Portfolio</a></li>
                <li><a href="portfolio-3-col.php">3 Column Portfolio</a></li>
                <li><a href="portfolio-4-col.php">4 Column Portfolio</a></li>
                <li><a href="portfolio-item.php">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog-home-1.php">Blog Home 1</a></li>
                <li><a href="blog-home-2.php">Blog Home 2</a></li>
                <li><a href="blog-post.php">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="full-width.php">Full Width Page</a></li>
                <li><a href="sidebar.php">Sidebar Page</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="404.php">404</a></li>
                <li><a href="pricing.php">Pricing Table</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5376.0518372654515!2d-5.149880044711952!3d55.59397723346804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4889ef3d2ee55de3%3A0x7265357884584afb!2sBrodick+Castle!5e1!3m2!1sen!2suk!4v1397578684806"></iframe>
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>If you have any questions, please contact us here</h3>
          <p>Though this form will not actually reach Brodick Castle, it may be useful for checking the functionality, it will email the email address you enter in the email address box, with the content of the message box</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form id="mc-form" class="mc-active" role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">#<div id="mc">
          <p>Please draw the shape in the box to submit the form: (<a onclick="window.location.reload()" href="#" title="Click for a new shape">new shape</a>)</p>
          <canvas id="mc-canvas">
            Your browser doesn't support the canvas element - please visit in a modern browser.
          </canvas>
          <input type="hidden" id="mc-action" value="http://josscrowcroft.com/projects/motioncaptcha-jquery-plugin/" />
        </div>
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" disabled="disabled" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Brodick Castle</h3>
          <h4>A quintessential Victorian 'Highland' estate.</h4>
          <p>
            Brodick Castle, Garden 
            Country Park
            Brodick
            <br>
            Ayrshire &amp; Arran
            KA27 8HY.<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>:0844 493 2152 </p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Castle: 1 - 30 Apr, daily 11-3, 1 May - 30 Sep, daily 11-4; 1 Oct - 31 Oct, daily 11-3.</p>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>This scripting on this page is the work of Henry Bond, all images are originals or are taken from Brodick Castles own website. Educational Website</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
  
  <!-- HTML5 Placeholder fallback: -->
 <!-- <script src="js/jquery.placeholder.1.1.1.min.js" type="text/javascript"></script> -->
  
  <!-- MotionCAPTCHA: -->
<script src="js/jquery.motionCaptcha.0.2.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      
      // Do the biznizz:
      $('#mc-form').motionCaptcha({
        shapes: ['triangle', 'x', 'rectangle', 'circle', 'check', 'zigzag', 'arrow', 'delete', 'pigtail', 'star']
      });
      
      // Yep:
      $("input.placeholder").placeholder();
    });
  </script>

  <!-- end of demo! -->




    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</php>
