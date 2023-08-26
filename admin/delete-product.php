<?php
include ('config.php');
require_once 'sess.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$conn->query("DELETE FROM product WHERE id=$id");
	$_SESSION['message'] = "User deleted Successfully!";
	$_SESSION['msg_type'] = "danger";

    header("location:product.php");
}
?>