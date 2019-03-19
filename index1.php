<?php include('server.php') ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>LITERACY MISSION</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
  <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/slippry.css">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/color/default.css">

  <script src="assets/js/modernizr.custom.js"></script>
</head>

<body>
  <header>

    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><h1 style="color:#ff0000;">Literacy Mission</h1></a>
        </div>
		
        <div class="navigation">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav navbar-right">
			  <div><li><a href="welcome.html"></a></li>
				<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome &nbsp; <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
				</div>
                <li class="current"><a href="#intro">Home</a></li>
				  <li><a href="#works">Queries</a></li>
				  	<li><a href="#graphs">Graphs</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
			
              
				
             </ul>
            </nav>
          </div>
          <!-- /.navbar-collapse -->
        </div>

      </div>
    </div>

  </header>
  <!-- section intro -->
  <section id="intro">
    <ul id="slippry-slider">
      <li>
        <a href="#slide1"><img src="assets/img/slide/modi.jpg" alt="TEAM 7 [Group 3]"></a>
      </li>
      <li>
        <a href="#slide2"><img src="assets/img/slide/2.jpg" ></a>
      </li>
      <li>
        <a href="#slide3"><img src="assets/img/slide/3.jpg" alt="Literacy Mission DB in INDIA"></a>
      </li>
    </ul>
  </section>
  <!-- end intro -->
  <!-- section works -->
  <section id="works" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Queries</span></h3>
          </div>
          <div class="sub-heading">
          </div>
        </div>
      </div>
	  <h3>1. <a href="query4.php"> No of schools in a state(District Wise)</a></h3>
            <h3>2. <a href="query5.php">No of colleges in a state(District Wise)</a></h3>
          <h3>3. <a href="query6.php">State with highest male literacy rate</a></h3>
            <h3>4. <a href="query7.php">State with highest female literacy rate</a></h3>
            <h3>5. <a href="query8.php">State with least male literacy rate</a></h3>
            <h3>6. <a href="query9.php">State with least female literacy rate</a></h3>
           <h3>7. <a href="query10.php">Most literate state (Avg)</a></h3>
            <h3>8. <a href="query11.php"> Least Literate State (Avg)</a></h3>
			<h3>9. <a href="query12.php">Top 5 Literate District In A State </a></h3>
			<h3>10. <a href="query14.php">Least 5 Literate District In A State</a></h3>
			<h3>11. <a href="query13.php">Top 5 States With Most Funds</a></h3>
  </section>
  <!-- section works -->
    <!-- section graphs -->
  <section id="graphs" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Graphs</span></h3>
          </div>
          <div class="sub-heading">
          </div>
        </div>
      </div>
	  <h3>1. <a href="apexcharts.js-master/samples/radialBar/State-Male-Rates.html"> Male Litercay Rates in a state</a></h3>
            <h3>2. <a href="apexcharts.js-master/samples/radialBar/State-Female-Rates.html">Female Literacy rates in a state</a></h3>
          <h3>3. <a href="apexcharts.js-master/samples/radialBar/g1.html">Compare Female Literacy rates in a state</a></h3>
            <h3>4. <a href="apexcharts.js-master/samples/radialBar/g2.html">Compare Male Literacy rates in a state</a></h3>
            
  </section>
  <!-- section graphs -->
   <!-- Section about -->
  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>About us</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              ...Literacy Mission in INDIA...
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/1.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>NARAYAN RAM NARAYANAN</strong></h5>
              <p>
                CB.EN.U4CSE16129
              </p>
              <ul class="social-profile">
                <li><a href="https://www.facebook.com/narayanram.narayanan"><i class="fa fa-facebook fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/2.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>RIYANK MUKHOPADHAYAY</strong></h5>
              <p>
              CB.EN.U4CSE16146
              </p>
              <ul class="social-profile">
                <li><a href="https://www.facebook.com/profile.php?id=100006259802575"><i class="fa fa-facebook fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/3.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>GAUTAM S GANESH</strong></h5>
              <p>
               CB.EN.U4CSE16117
              </p>
              <ul class="social-profile">
                <li><a href="https://www.facebook.com/gautam.ganesh.9440"><i class="fa fa-facebook fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-box">
            <img src="assets/img/dummies/4.jpg" alt="" class="img-responsive" />
            <div class="roles">
              <h5><strong>GANESH</strong></h5>
              <p>
                CB.EN.U4CSE16116
              </p>
              <ul class="social-profile">
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->
  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Get in touch</span></h3>
          </div>
          <div class="sub-heading">
          </div>
        </div>
      </div>
    </div>

     <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
          <p>
            Want to work with us or just want to say hello? Don't hesitate to get in touch!
          </p>
          <!-- start contact form -->
          <div class="cform" id="contact-form">


            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-lg btn-theme">Send Message</button></div>
            </form>
          </div>
          <!-- END contact form -->
        </div>
        <div class="col-md-6">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <!-- map -->
          <div id="section-map" class="clearfix">
            <div id="google-map" data-latitude="10.9027" data-longitude="76.9006"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->
  <footer>
  <center><h2><a href="Logout.html">Logout</a></h2></center>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <ul class="social-network social-circle">
                <li><a href="https://github.com/narayanramn2r" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100006259802575" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter">
              <p>
					Literacy Mission
              </p>
              <div class="credits">
                <a>Designed by Inazuma11</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/AnimOnScroll.js"></script>
  <script>
    new AnimOnScroll(document.getElementById('grid'), {
      minDuration: 0.4,
      maxDuration: 0.7,
      viewportFactor: 0.2
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>

  <script src="assets/js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
