

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking | Waterest Hotels & Resorts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Waterest</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="room" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="ucontact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
      </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Make a reservation</span></p>
	            <h1 class="mb-4 bread">Book</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Make a reservation</h2>
          </div>
          </div>
        <div class="sidebar-wrap bg-light ftco-animate fadeInUp ftco-animated">
          <h3 class="heading mb-4">Enter your information</h3>
          @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form action="{{ route('book.store') }}" method="POST">
              @csrf
            <div class="fields">
              <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group">
              <strong>Check In</strong>
                <input type="date" name="check_in"  class="form-control" placeholder="Check In Date">
              </div>
              <div class="form-group">
              <strong>Check Out</strong>
                <input type="date" name="check_out" class="form-control" placeholder="Check Out Date">
              </div>
              <div class="form-group">
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="room_type" id="" class="form-control">
                    <option>Room Type</option>
                    <option>Classic Room</option>
                    <option>Deluxe Room</option>
                    <option>Family Room</option>
                    <option>Suite Room</option>
                    <option>Superior Room</option>
                    <option>Luxury Room</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="qauntity" id="" class="form-control">
                    <option>Room Quantity</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="adult" id="" class="form-control">
                    <option>Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" value="Book Now" class="btn btn-primary py-3 px-5">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Waterest Hotels & Resorts</h2>
              <p>A world-class five stars luxury resorts with 301 rooms and counting sprinkled with the essence of Cambodianess.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="blog.html" class="py-2 d-block">Blog</a></li>
                <li><a href="rooms.html" class="py-2 d-block">Accomodations</a></li>
                <li><a href="restaurant.html" class="py-2 d-block">Restaurant & Bar</a></li>
                <li><a href="promotion.html" class="py-2 d-block">Promotion</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Waterest Hotels Inc.</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="about.html" class="py-2 d-block">About Us</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
                <li><a href="career.html" class="py-2 d-block">Career</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Question?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, Little San Francisco, Sihanoukville, Cambodia</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+855 39 392 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@waterest.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Waterest Hotels Inc.
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=true"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>