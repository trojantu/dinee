<?php include ('sess.php');?>
<?php
require_once 'config.php';
                                        if (isset($_POST['ok'])){
                                          $fileName = $_FILES['file']['name'];
                                          $fileTmpName = $_FILES['file']['tmp_name'];
                                        $path = "../loggedin/image/".$fileName;
                                        $pname=$_POST['pname'];
                                        $ptype=$_POST['ptype'];
                                        $pprice=$_POST['pprice'];
                                        $pcode=$_POST['pcode'];


                                        $query = "INSERT INTO product(product_name,product_type,product_code,product_image,product_price) VALUES('$pname','$ptype','$pcode','$fileName','$pprice')";
                                        $run = mysqli_query($conn,$query);
                                        
                                        if($run){
                                            move_uploaded_file($fileTmpName,$path);
                                            echo "<script> window.location='product.php' </script>";
                                           // echo $id;
                                        }
                                        else{
                                            echo "error".mysqli_error($conn);
                                           // echo $id;
                                        }
                        
                      }
                                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title><?php include ('../name.php');?></title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- ================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="dashboard.php" class="logo"><?php include ('../name.php');?> <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <!-- alert notification start-->
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <!--image-->
                            </span>
                            <span class="username">
                                                      <!--display name-->    
<?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?>
<!----->
                            </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <!--a href="#"><i class="icon_profile"></i> My Profile</a-->
              </li>
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="dashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>customers</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="customer.php" href="customer.php">Customers Details</a></li>
              <li><a class="add-customer.php" href="add-customer.php">Add Customers</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Admins</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="dashboard.php">Admin Details</a></li>
              <li><a class="" href="add-admin.php">Add Admin</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>product</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="product.php">Products Details</a></li>
              <li><a class="" href="add-product.php">Add Products</a></li>
            </ul>
          </li>
          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="logout.php"><span>log out</span></a></li>
            </ul>
          </li> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-bars"></i><?php include ('../name.php');?></li>
              <li><i class="fa fa-square-o"></i></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

        <!----------------form----------------->

        <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data"  action="add-product.php"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="pname" id="exampleInputEmail1" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="number" class="form-control" name="pprice" id="exampleInputEmail1" placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Code</label>
                    <input type="text" name="pcode" class="form-control" id="exampleInputEmail1" placeholder="Product Code">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Type</label>
                    <input type="text" name="ptype" class="form-control" id="exampleInputEmail1" placeholder="Product Type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">image</label>
                    <input type="file" class="form-control text-sucess" name="file" required/>
                  </div>
                  <button type="submit" name="ok" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>

        <!---------------/form----------------->

        <!--/@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href=""><?php include ('../name.php');?></a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

</body>
</html>
