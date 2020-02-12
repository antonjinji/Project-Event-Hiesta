<?php 
	$con=mysql_connect("himti.org", "himtiorg", "Ja:19+_?.na#12ia.sd:a&^%$!)(naZCQ']02ct06]");

	if(!$con){
		echo "Couldn't established";
	}
	else{
		//echo "Established";
		mysql_select_db("himtiorg_hiesta2018",$con);
	}

	set_time_limit(0);
	date_default_timezone_set('Asia/Jakarta');
?>