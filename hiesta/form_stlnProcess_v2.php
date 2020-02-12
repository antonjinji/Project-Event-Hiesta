<?php
	include 'connect.php';
    $type = $_POST['txtType'];
	$num = $_POST['txtNum'];
	$price = 0;
	if($type=="Cicilan" && $num=="1"){
		$price = 4400000;
	}
	else if($type=="Cicilan" && $num=="2"){
		$price = 4300000;
	}
	else if($type=="Cicilan" && $num=="3"){
		$price = 4200000;
	}
	else if($type=="Cicilan" && $num=="4"){
		$price = 4100000;
	}
	else if($type=="Cicilan" && $num=="5"){
		$price = 4000000;
	}
	else if($type=="Cash" && $num=="1"){
		$price = 4200000;
	}
	else if($type=="Cash" && $num=="2"){
		$price = 4100000;
	}
	else if($type=="Cash" && $num=="3"){
		$price = 4000000;
	}
	
	foreach($_POST['txtName'] as $txtname){
		$name[]=$txtname;
	}
	foreach($_POST['txtNim'] as $txtnim){
		$nim[]=$txtnim;
	}
	foreach($_POST['txtPhone'] as $txtPhone){
		$phone[]=$txtPhone;
	}
	foreach($_POST['txtEmail'] as $txtEmail){
		$email[]=$txtEmail;
	}
	for($i = 0; $i<5; $i++){
	    $arrVege = "txtVege".($i);
	    $vege[]=$_POST[$arrVege];
	}

	$date = date('Y-m-d H:i:s', time());

    $id=0;
	while($name[$id]!=""){
	   // echo $type." - ".$price." - ".$name[$id]." - ".$nim[$id]." - ".$phone[$id]." - ".$email[$id]." - ".$vege[$id]." - "."<br>";
	   $insert=mysql_query("INSERT INTO regis_stln (Type,Name,NIM,Phone,Email,Vege,Price,RegisDate) VALUES ('$type','$name[$id]','$nim[$id]','$phone[$id]','$email[$id]','$vege[$id]','$price','$date')");
	    $id++;
	}
	$pass = $price."/person";
	header("location:aftersubmit.php?price=$pass");
?>