<?php include('sess.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php include ('name.php');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--==================================lllll-->
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assetss/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assetss/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assetss/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assetss/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assetss/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assetss/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assetss/css/responsive.css">
<!--=================================/llllll-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
      body {
        text-align: center;
       
        background: black;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: #EBF0F5;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+254</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">Ke</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><?php include ('name.php');?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
         
         
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="cart.php"><i class="fas fa-shopping-cart"></i>  <span id="cart-item" class="badge badge-danger"></span></a></li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Welcome: <?php echo $customers_username = $customers_row['firstname'];?></a>
      <a href="logout.php" class="book-a-table-btn scrollto d-none d-lg-flex">Log Out</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= ->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span><?php // include ('name.php');?></span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Order food</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section>< End Hero -->

  <main id="main">
<div>
  <center><h2 class="text-white pt-3">.`.<h2></center>
</div>


<!-------------------------------------->
<!--===================================================================================================== -->
<div class="mt-5"></div>
      <div class="card mt-5">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Your Order is placed successfully<br/> <a href="profile.php">Check Your Order</a></p>
      </div>
<!--===================================================================================================== -->
<!-----------------//------------------->
    
   

  </main><!-- End #main -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>FAST</h4>
              <p>Upon your order food is delivered within an hour</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>SWEET</h4>
              <p>We reatain theoriginal taste of the food.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> CONVINIENT</h4>
              <p>We are open 24/7</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?php include ('name.php');?></h3>
              <p>
               
                <br><br>
                <strong>Phone:</strong> <br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!---------ajax--------------> 
<script type="text/javascript">
  $(document).ready(function(){

    $(".itemQty").on('change',function(){
        var $el =$(this).closest('tr');
          var pid = $el.find(".pid").val();
          var pprice = $el.find(".pprice").val();
          var qty = $el.find(".itemQty").val();
          location.reload(true);
          $.ajax({
            url:'action.php',
            method:'post',
            cache:false,
            data:{qty:qty,pid:pid,pprice:pprice},
            success:function(response){
              
              console.log(response);
            }
           
          });
    });
   
    load_cart_item_number();
   
    function load_cart_item_number(){
      $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $("#cart-item").html(response);
          }
      });
    }
  });
</script>

<!---------ajax--------------> 
<script type="text/javascript">
  $(document).ready(function(){
    $(".product_check").click(function(){
      $("#loader").show();

      var actions = 'data';
      var brand  = get_filter_text('brand');
      var ram  = get_filter_text('ram');
      var hdd  = get_filter_text('rom');
      var cam  = get_filter_text('camera');
      var screen  = get_filter_text('inch');
      

      $.ajax({
        url:'action.php',
        method:'POST',
        data:{actions:actions,brand:brand,ram:ram,hdd:hdd,cam:cam,screen:screen},
        success:function(response){
          $("#result").html(response);
          $("#loader").hide();
          $("#textChanger").text("Filtered Products");
          
        }
      });
    
    });
    function get_filter_text(text_id){
      var filterData = [];
      $('#'+text_id+':checked').each(function(){
           filterData.push($(this).val());
      });
      return filterData;
      load_cart_item_number();
    }
    $(".addItemBtn").click(function(e){
       e.preventDefault();
       var $form = $(this).closest(".form-submit");
       var pid=$form.find(".pid").val();
       var pname=$form.find(".pname").val();
       var pprice=$form.find(".pprice").val();
       var pimage=$form.find(".pimage").val();
       var pcode=$form.find(".pcode").val();

       $.ajax({
          url:'action.php',
          method:'post',
          data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
          success:function(response){
                $("#message").html(response);
               // window.scrollTo(0,0);
                load_cart_item_number();
          }
       });
    });
    load_cart_item_number();
    function load_cart_item_number(){
      $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $("#cart-item").html(response);
          }
      });
    }
    
    
  });
</script>
<!---------ajax--------------> 
<script type="text/javascript">
  $(document).ready(function(){

    $("#placeOrder").submit(function(e){
     e.preventDefault();
     $.ajax({
       url: 'action.php',
       method: 'post',
       data: $('form').serialize()+"& action=order",
       success: function(response){
           $("#order").html(response);
       }
     });
    });

    load_cart_item_number();
    function load_cart_item_number(){
      $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
            $("#cart-item").html(response);
          }
      });
    }
  });
</script>

</body>

</html>