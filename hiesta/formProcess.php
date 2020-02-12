<?php
	include 'connect.php';

	$name = $_POST['txtName'];
	$nim = $_POST['txtNim'];
	$phone = $_POST['txtPhone'];
	$email = $_POST['txtEmail'];
	$vege = $_POST['txtVege'];
	$date = date('Y-m-d H:i:s', time());
	$price = 0;

	foreach((array) $_POST['txtEvent'] as $selected){
		if($selected=='seminar1' || $selected=='seminar2'){
			$price+=35000;
		}
		else if($selected=='workshop1' || $selected=='workshop2'){
			$price+=50000;
		}

		$insert=mysql_query("INSERT INTO regis (NIM,Name,Phone,Email,Vege,Event,DateRegis) VALUES ('$nim','$name','$phone','$email','$vege','$selected','$date')");
	}
	header("location:aftersubmit.php?price=$price");
?>