 <?php include('sess.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php include ('name.php');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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

      <h1 class="logo me-auto me-lg-0"><a href="#"><?php include ('name.php');?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          
      
          
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
          
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= >
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="text-white">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic text-white">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p class="text-white">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/milk.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">vanilla milkshake</a><span>Ksh400</span>
            </div>
            <div class="menu-ingredients">
               milk,vanilla,icecream
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/fries.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken fries</a><span>Ksh695</span>
            </div>
            <div class="menu-ingredients">
               potato,chicken
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/orange.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Orange juice</a><span>Ksh300</span>
            </div>
            <div class="menu-ingredients">
              oranges
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/pissa.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">pineapple pizza</a><span>Ksh1000</span>
            </div>
            <div class="menu-ingredients">
               pizza
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/ice.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Ice cream</a><span>Ksh995</span>
            </div>
            <div class="menu-ingredients">
              milk
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>Ksh495</span>
            </div>
            <div class="menu-ingredients">
               deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>Ksh995</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>Ksh995</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>Ksh1295</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                
            </div>
            

			<div class="row product-lists">
      <?php
      include 'config.php';
      $stmt =$conn->prepare("SELECT * FROM product")or die($conn->error);
      $stmt->execute();
      $result=$stmt->get_result();
      while($row = $result->fetch_assoc()):
      ?>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="image/<?= $row['product_image'] ?>" alt="" height="200"></a>
						</div>
						<h3 class="text-white"><?= $row['product_name'] ?></h3>
						<p class="product-price text-white"><span><?echo $row['product_type']; ?></span>Ksh.&nbsp;&nbsp;<?=
                      number_format($row['product_price'],2)  ?></p>
                   <form  action="" class="form-submit">
                          <input type="hidden" class="pid" value="<?=$row['id']?>">

                          <input type="hidden" class="pname" value="<?=$row['product_name']?>">

                          <input type="hidden" class="pprice" value="<?=$row['product_price']?>">

                          <input type="hidden" class="pimage" value="<?=$row['product_image']?>">

                          <input type="hidden" class="pcode" value="<?=$row['product_code']?>">

                          <a href="cart.html" class="btn cart-btn addItemBtn"><i class="fas fa-shopping-cart "></i> Add to Cart</a>
                    </form>
						
					</div>
				</div>
        <?php endwhile ?>

			</div>

			<div class="row">
				
			</div>
		</div>
	</div>
	<!-- end products -->

  
   
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
                Ruaka, Nairobi <br>
                Ke 535022, Ke<br><br>
                <strong>Phone:</strong> +254 <br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Food</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Snacks</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Drinks</a></li>
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

</body>

</html>