<?php include('sess.php');?>
<?php
require 'config.php';
$grand_total = 0;
$allItems= '';
$items = array();
$ordered=0;
$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart WHERE customer_id=$customers_id AND ordered=$ordered";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while($row= $result->fetch_assoc()){
    $grand_total +=$row['total_price'];
    $items[] =$row['ItemQty'];
}

$allItems = implode(",",$items);
/* this is a trial of updating order to 1
UPDATE cart
    SET ordered = 1
    WHERE product_code IN ('Bob', 'Jane', 'Frank', 'Susan', 'John');
 inside we should have array of elements*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php include ('name.php');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+254 794 383 934</span></i>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span><?php include ('name.php');?></span></h1>
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
  </section><!-- End Hero -->

  <main id="main">
<div>
  <center><h2 class="text-white pt-3">Profile<h2></center>
</div>


	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Personal details
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
                                    <div class="row">
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?php echo $customers_username = $customers_row['firstname'];?>" placeholder="First name">
                                    </div>
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?php echo $customers_username = $customers_row['lastname'];?>" placeholder="Last name">
                                    </div>
                                    </div>
                                    
                                    <div class="row ">
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?=$customers_email?>" placeholder="Email">
                                    </div>
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?=$customers_phone?>" placeholder="Phone">
                                    </div>
                                    </div>
                                    
                                    <div class="row ">
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?=$customers_idno?>" placeholder="Id No" disabled>
                                    </div>
                                    <div class="col mt-2">
                                     <input type="text" class="form-control" value="<?=$customers_address?>" placeholder="address">
                                    </div>
                                    </div>

                                    <div class="row mt-3">
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Update</button>
                                    </div>

    
						        		
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Your Orders
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                         <th scope="col">Order Number</th>
                                         <th scope="col">Products</th>
                                         <th scope="col">Price</th>
                                         <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
										require 'config.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM orders ORDER BY Order_id");
										while($row = $query->fetch_array()){
										$order_id=$row['Order_id'];
										?>
                                        <tr>
                                        <th scope="row"><?php echo $row['order_number'];?></th>
                                        <td><?php echo $row['products'];?></td>
                                        <td><?php echo $row['price'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                        </tr>
                                        <?php } ?>
    
                                        </tbody>
                                        </table>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

			
			</div>
		</div>
	</div>
	<!-- end check out section -->
    
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Ruaka, Kenya</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+254</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?php include ('name.php');?></h3>
              <p>
                <br>
                <br><br>
                <strong>Phone:</strong> <br>
                <strong>Email:</strong> infobr>
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

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!---------ajax-------------- 
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

<!---------ajax-------------- 
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
<!---------ajax--------------
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
</script-->

</body>

</html>