<?php
	include 'connect.php';

	$name = $_POST['txtName'];
	$nim = $_POST['txtNim'];
	$phone = $_POST['txtPhone'];
	$email = $_POST['txtEmail'];
	$vege = $_POST['txtVege'];
	$date = date('Y-m-d H:i:s', time());
	$tipe = $_POST['type'];
	$price = 0;
	if($tipe=="Cicilan"){
	    $price = 4300000;
	}
	else $price = 4100000;
	
	$insert=mysql_query("INSERT INTO regis_stln (Type,Name,NIM,Phone,Email,Vege,Price,RegisDate) VALUES ('$tipe','$name','$nim','$phone','$email','$vege','$price','$date')");

	header("location:aftersubmit.php?price=$price");
	
?>