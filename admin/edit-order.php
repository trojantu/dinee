<?php include ('sess.php');?>

<?php
require_once 'config.php';
$id = isset($_GET['id']) ? $_GET['id'] : '0';
$sql= "SELECT * FROM orders WHERE Order_id=$id";
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//print_r ($row); 
?>


                                    <!---update  order------>
<?php
require_once 'config.php';

    if(isset($_POST['ok'])){
      $Oid=$_POST['id'];
        $pname=$_POST['products'];
        $pmode=$_POST['pmode'];
        $pprice=$_POST['price'];
        $status=$_POST['status'];
        $address=$_POST['address'];
        $date=$_POST['date'];


        $query = "UPDATE orders SET products = '$pname', pmode='$pmode',price ='$pprice', status='$status', date='$date'  WHERE Order_id = '$Oid'";
        $run = mysqli_query($conn,$query);
        
        if($run){
           
              echo " <div class='alert alert-warning'><font color= 'green' size='3'>&nbsp;&nbsp;<i class='glyphicon glyphicon-warning-sign'></i>Details Updated</font></div>";
                    
            header("location:orders.php");
        }
        else{
            echo " <div class='alert alert-warning'><font color= 'red' size='3'>&nbsp;&nbsp;<i class='glyphicon glyphicon-warning-sign'></i>error updating details</font></div>";
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
<!---/update order------>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title><?php include ('../name.php');?> Dasboard</title>

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
                Order
              </header>
              <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data"  action="edit-order.php"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" class="form-control" value="<?php echo $row['Order_id']; ?>" name="id" id="exampleInputEmail1" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Products</label>
                    <input type="text" class="form-control" value="<?php echo $row['products']; ?>" name="products" id="exampleInputEmail1" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Products Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>" id="exampleInputEmail1" placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment Method</label>
                    <input type="text" class="form-control" name="pmode" value="<?php echo $row['pmode']; ?>" id="exampleInputEmail1" placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <select class="form-select form-select-lg mb-3" name="status" aria-label=".form-select-lg example">
                    <option selected><?php echo $row['status']; ?></option>
                   <option value="Order Confirmed">Order Confirmed</option>
                   <option value="Order Completed">Order Completed</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" id="exampleInputEmail1" placeholder="Enter Product Price">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" name="date" value="<?php echo $row['date']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Type">
                  </div>
                  <button type="submit" name="ok" class="btn btn-primary">UPDATE</button>
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
          Designed by <a href="">Shem</a>
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
