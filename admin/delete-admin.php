<?php
include ('config.php');
require_once 'sess.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$conn->query("DELETE FROM user WHERE user_id=$id");
	$_SESSION['message'] = "User deleted Successfully!";
	$_SESSION['msg_type'] = "danger";

    header("location:dashboard.php");
}
?>