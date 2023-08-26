<?php
	require 'config.php';
	session_start(); 
	$customers_username="";	
	$customers_id="";

	if(!ISSET($_SESSION['customers_id'])){
		//header("location:dashboard.php");
	}else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("unable to get your name");
		$customers_row = $customers_query->fetch_array();
		$customers_username = $customers_row['firstname']." ".$customers_row['lastname'];
	}
 	  
	  if(!ISSET($_SESSION['customers_id'])){
		//header("location:index.php");
	  }else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("NO EMAIL (LOG IN)");
		$customers_row = $customers_query->fetch_array();
		$customers_email = $customers_row['email'];
	   
	  }
	  if(!ISSET($_SESSION['customers_id'])){
		//header("location:index.php");
	  }else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("NO PHONE_NO(LOGIN)");
		$customer_row = $customers_query->fetch_array();
		$customers_phone = $customer_row['phone_number'];
	   
	  }
	  if(!ISSET($_SESSION['customers_id'])){
		//header("location:index.php");
	  }else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("NO PHONE_NO(LOGIN)");
		$customers_row = $customers_query->fetch_array();
		$customers_id = $customers_row['customers_id'];
	   
	  }
	  if(!ISSET($_SESSION['customers_id'])){
		//header("location:index.php");
	  }else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("NO Address(LOGIN)");
		$customers_row = $customers_query->fetch_array();
		$customers_address = $customers_row['address'];
	   
	  }
	  if(!ISSET($_SESSION['customers_id'])){
		//header("location:index.php");
	  }else{
		$session_id=$_SESSION['customers_id'];
		$customers_query = $conn->query("SELECT * FROM customers WHERE customers_id = '$session_id'") or die("NO Address(LOGIN)");
		$customers_row = $customers_query->fetch_array();
		$customers_idno = $customers_row['id_number'];
	   
	  }
	  
	  

	  
	 
?>
