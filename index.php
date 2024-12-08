<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Your Request</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Your Request</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/Banner1.jpeg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Your Request</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Your Request Services</h3>
      <p>
        Your Request Services is Bangladesh’s leading chain of multi-brand Electronics and Electrical service
        workshops offering a wide array of services. We focus on enhancing your user experience by offering world-class
        Electronic Appliances services. Our sole mission is “To provide Electronic Appliances care
        services to keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across Bangladesh. Now you
        can book your service online by doing Registration.
      </p>
    </div>
  </div>
  <!--Introduction Section End-->

  
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tools fa-8x text-success"></i></a>
        <h4 class="mt-4">Home Maintenance Services</h4>
        <p>Plumbing - 550 Taka</p>
        <p>Electrical Work - 700 Taka</p>
        <p>Carpentry - 800 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cog fa-8x text-primary"></i></a>
        <h4 class="mt-4">Appliance Repair and Installation</h4>
        <p>Refrigerator Repair - 600 Taka</p>
        <p>Oven Repair - 500 Taka</p>
        <p>Dishwasher Repair - 550 Taka</p>
        <p>Washing Machine Repair - 650 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-broom fa-8x text-info"></i></a>
        <h4 class="mt-4">Cleaning Services</h4>
        <p>House Cleaning - 1000 Taka</p>
        <p>Office Cleaning - 1200 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-laptop fa-8x text-success"></i></a>
        <h4 class="mt-4">IT and Technical Support</h4>
        <p>Computer Repair - 800 Taka</p>
        <p>Fixing Hardware Issues - 700 Taka</p>
        <p>Fixing Software Issues - 600 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-leaf fa-8x text-primary"></i></a>
        <h4 class="mt-4">Gardening and Landscaping</h4>
        <p>Lawn Care - 900 Taka</p>
        <p>Mowing - 500 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-user-friends fa-8x text-info"></i></a>
        <h4 class="mt-4">Elderly Care and Support</h4>
        <p>Hourly Care - 300 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-child fa-8x text-success"></i></a>
        <h4 class="mt-4">Childcare Services</h4>
        <p>Hourly Care - 400 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-ambulance fa-8x text-primary"></i></a>
        <h4 class="mt-4">Paramedic Services</h4>
        <p>Emergency Response - 1500 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-hand-holding-heart fa-8x text-info"></i></a>
        <h4 class="mt-4">Helping Hand</h4>
        <p>Hourly Assistance - 250 Taka</p>
        <button class="btn btn-primary" onclick="location.href='#registration'">Add</button>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
<div class="jumbotron bg-danger" id="Customer">
  <!-- Start Happy Customer Jumbotron -->
  <div class="container">
    <!-- Start Customer Container -->
    <h2 class="text-center text-white">Happy Customers</h2>
    <div class="row mt-5">
      <!-- Customer 1 -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card shadow-lg">
          <div class="card-body text-center">
            <img src="images/avtar1.jpeg" class="img-fluid rounded-circle mb-3" alt="Customer 1" style="width: 100px; height: 100px;">
            <h4 class="card-title">Faria Islam</h4>
            <p class="card-text">Very good response & service is good.</p>
          </div>
        </div>
      </div>

      <!-- Customer 2 -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card shadow-lg">
          <div class="card-body text-center">
            <img src="images/avtar2.jpeg" class="img-fluid rounded-circle mb-3" alt="Customer 2" style="width: 100px; height: 100px;">
            <h4 class="card-title">Sadia Akter</h4>
            <p class="card-text">Service providers are well trained & have good expertise.</p>
          </div>
        </div>
      </div>

      <!-- Customer 3 -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card shadow-lg">
          <div class="card-body text-center">
            <img src="images/avtar3.jpeg" class="img-fluid rounded-circle mb-3" alt="Customer 3" style="width: 100px; height: 100px;">
            <h4 class="card-title">Sarjis Alom</h4>
            <p class="card-text">Their service is professional, and we received excellent care.</p>
          </div>
        </div>
      </div>

      <!-- Customer 4 -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card shadow-lg">
          <div class="card-body text-center">
            <img src="images/avtar4.jpeg" class="img-fluid rounded-circle mb-3" alt="Customer 4" style="width: 100px; height: 100px;">
            <h4 class="card-title">Nusrat Jahan</h4>
            <p class="card-text">I just loved their services.</p>
          </div>
        </div>
      </div>
    </div> <!-- End Customer Row-->
  </div> <!-- End Customer Container -->
</div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Your Request Ltd, <br>
        vatara, Dhaka <br>
        Bangladesh - 8005 <br>
        Phone: +880189754001 <br>
        <a href="#" target="_blank">www.yourrequest.com</a> <br>

        <br><br>
        <strong>Dhaka Branch:</strong> <br>
        Your Request Ltd, <br>
        Jatrabari, Dhaka <br>
        Bangladesh - 8042 <br>
        Phone: +8801654367001 <br>
        <a href="#" target="_blank">www.yourrequest.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by jannat &copy; 2024.</small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Bootstrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>