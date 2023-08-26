<?php
include 'sess.php';
$odered = 0;
if(isset($_POST['pid'])){

    //store add to cart data
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pimage=$_POST['pimage'];
    $pcode=$_POST['pcode'];
    $pqty=1;
    $customers_id;
    $odered = 0;
    $stmt = $conn->prepare("SELECT product_code FROM cart WHERE customer_id=$customers_id AND ordered=$odered AND product_code=?");
    $stmt->bind_param("s",$pcode);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $code = $r['product_code'];
    if(!$code){
      
     $query = $conn->prepare("INSERT INTO cart (product_name,product_price,product_image,qty,total_price,product_code,ordered,customer_id)
      VALUES(?,?,?,?,?,?,?,?)");
      $query->bind_param("sssissii",$pname,$pprice,$pimage,$pqty,$pprice,$pcode,$odered,$customers_id);
      $query->execute();
  
      echo '<div class="alert alert-success alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Item added to cart!!</strong>
    </div>';
    }else{
        echo '<div class="alert alert-warning alert-dismissible mt-2">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Item already in cart!!</strong>
      </div>';
    }
}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
  $stmt = $conn->prepare("SELECT * FROM cart WHERE customer_id= $customers_id AND ordered=$odered") or die("LOG in");
  $stmt ->execute();
  $stmt->store_result();
  $rows = $stmt->num_rows;

  echo $rows;
}
if(isset($_GET['remove'])){
  $id = $_GET['remove'];

  $stmt = $conn->prepare("DELETE FROM cart WHERE  customer_id=$customers_id AND ordered=$odered AND  id=?");
  $stmt->bind_param("i",$id);
  $stmt->execute();
  $_SESSION['showAlert'] = 'block';
  $_SESSION['message'] = 'item removed !';
  header('location:cart.php');
  
}
if(isset($_GET['clear'])){
  //$id = $_GET['remove'];   not needed but will need it

  $stmt = $conn->prepare("DELETE FROM cart WHERE customer_id=$customers_id AND ordered=$odered");
  $stmt->execute();
  $_SESSION['showAlert'] = 'block';
  $_SESSION['message'] = ' All items removed !';
  header('location:cart.php');
  
}


if(isset($_POST['qty'])){
$qty = $_POST['qty'];
$pid = $_POST['pid'];
$pprice = $_POST['pprice'];
 
$tprice =$qty*$pprice;
  $stmt = $conn->prepare("UPDATE cart SET qty=?, total_price=? WHERE customer_id=$customers_id AND ordered=$odered AND  id =?");
  $stmt->bind_param("isi",$qty,$tprice,$pid);
  $stmt->execute();
 
  
}

if(isset($_POST['action']) && isset($_POST['action']) == 'order'){
  /*------------------generate order number--------------*/
   $order_numbers="abcdedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $order_number = str_shuffle($order_numbers);
   $orderN =substr($order_number,0,11);
  /*------------------/generate order number--------------*/
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $products = $_POST['products'];
  $grand_total = $_POST['grand_total'];
  $address = $_POST['address'];
  $pmode = $_POST['pmode'];
  $status="ordered";
  $date=$_POST['date'];
  
  $data='';

  $stmt = $conn->prepare("INSERT INTO orders (name,email,phone,address,pmode,products,price,customer_id,order_number,status,date)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssssssss",$name,$email,$phone,$address,$pmode,$products,$grand_total,$customers_id,$orderN,$status,$date);
  $stmt->execute();
$data .='
<div class="text-center">
<h1 class="display-4 mt-2 text-info">Thank You '.$customers_row['firstname']." ".$customers_row['lastname'].'</h1>
<h2 class="text-success">Your Order Placed Successfully!</h2>
<h4>Items You have Ordered:</h4>
<h4 class="bg-danger text-light rounded p-2">'.$products.'</h4>
<h4 class="bg-danger text-light rounded p-2">Your Order Number is: '.substr($order_number,0,11).'</h4>
</div>
';
echo $data;


$hash= $orderN;
$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 

$from='support@aceteam1.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html>
<style type="text/css">
</style>
<body style="background-color:#e2e5e8">';
$message .= '<hr>';
$message .= '<h1 style="color:white;"><center>CowBunga Dairy</center></h1>';
$message .= '<h2 style="color:blue;font-family:courier;"><center>Your Order</center></h2>';
$message .= '<p style="color:#080;font-size:18px;"><center>Thanks for choosing Us</center></p>';
$message .= '<p style="color:#080;font-size:18px;"><center>Order Number: <b>'.$hash.'</b></center></p>';
$message .= '<p style="color:#080;font-size:18px;"><center><i>Products: '.$products.'</i></center></p>';
$message .= '<hr>';
$message .= '</body></html>';

//mail($to, $subject, $message, $headers); // Send our email

/*-----get array of code and update cart info--------*/
require 'config.php';
$ordereds=1;
$sql = "SELECT product_code FROM cart where customer_id=$customers_id AND ordered=0 ";
$retval = mysqli_query($conn,$sql);
if (!$retval){

}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC)){

  $products_code = $row['product_code']; 
}
$stmt =$conn->prepare("UPDATE cart SET ordered=? WHERE customer_id=$customers_id");
$stmt->bind_param("i",$ordereds);
$stmt->execute();
mysqli_close($conn);

/*-----/get array of code and update cart info---------*/
}

/*                           filter                          */
require 'config.php';
if(isset($_POST['actions'])){
  $sql = "SELECT * FROM product where product_type !=''";
    if(isset($_POST['brand'])){
      $brand = implode("','", $_POST['brand']);
      $sql .="AND product_type IN('".$brand."')"; 
    }
    if(isset($_POST['ram'])){
      $ram = implode("','", $_POST['ram']);
      $sql .="AND phone_ram IN('".$ram."')"; 
    }
    if(isset($_POST['hdd'])){
      $hdd = implode("','", $_POST['hdd']);
      $sql .="AND phone_rom IN('".$hdd."')"; 
    }
    if(isset($_POST['screen'])){
      $screen = implode("','", $_POST['screen']);
      $sql .="AND phone_inch IN('".$screen."')"; 
    }
    if(isset($_POST['cam'])){
      $cam = implode("','", $_POST['cam']);
      $sql .="AND phone_camera IN('".$cam."')"; 
    }
    $result = $conn->query($sql);
    $output='';
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
         $output .='
         <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
              <div class="card p-2 border-secondry mb-2">
                  <img src="'.$row['product_image'].'" alt="" class="card-img-top text-center" height="250">
                  <div class="card-body p-1">
                  <h4 class="card-title text-center text-info">'. $row['product_name'].'</h4>
                      <h5 class="card-title text-center text-danger">Ksh.&nbsp;&nbsp;'.
                      number_format($row['product_price'],2) .'</h5>
                      <h5 class="card-title text-center text-dark" style="font-size: 10px;">
                        ram: '.$row['phone_ram'].'gb / rom: '.$row['phone_rom'].'gb /
                        '.$row['phone_camera'].' px / '.$row['phone_inch'].' "
                      </h5>
                  </div>
                  <div class="card-footer p-1">
                      <form  action="" class="form-submit">
                          <input type="hidden" class="pid" value="'.$row['id'].'">

                          <input type="hidden" class="pname" value="'.$row['product_name'].'">

                          <input type="hidden" class="pprice" value="'.$row['product_price'].'">

                          <input type="hidden" class="pimage" value="'.$row['product_image'].'">

                          <input type="hidden" class="pcode" value="'.$row['product_code'].'">



                          <button class="btn btn-info btn-block addItemBtn">
                      <i class="fas fa-cart-plus"></i> &nbsp;&nbsp; Add to Cart</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
         ';
         
      }
    }else{
      $output = '
      
      <div class="container text-info border my-5">
              <div class="text-center">
             <h2>PRODUCTS NOT AVAILABLE AT THE MOMENT!!</h2>
             </div>
          </div> ';
    }
    echo $output;
}
/*                           //filter                          */

/*---------------------------cancel order------------------------------------*/
if(isset($_GET['cancel'])){
  $id = $_GET['cancel'];
  $status='cancelled';
  $stmt = $conn->prepare("UPDATE orders SET online_status = ? WHERE id=?");
  $stmt->bind_param("si",$status,$id);
  $stmt->execute();
  $_SESSION['showAlert'] = 'block';
  $_SESSION['message'] = 'order cancelled !';
  header('location:profile.php');
  
}
/*-------------------------//cancel order------------------------------------*/

?>