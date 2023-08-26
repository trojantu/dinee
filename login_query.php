<?php
	require_once 'config.php';
	
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$verified= 1;
	
		$result = $conn->query("SELECT * FROM customers WHERE email=  '$email'  && BINARY password = '$password'") or 
		die("Unable to LogIn Check Details  ");
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `customers` WHERE  email=  '$email' && BINARY password = '$password'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['customers_id'] = $row['customers_id'];
			header('location:homepage.php');
		}else{
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR! CHECK DETAILS</center></font>";
		}
	
	}
?>
