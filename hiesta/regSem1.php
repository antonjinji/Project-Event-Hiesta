<?php 
	include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HIESTA 2017</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main-oxy.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/icon.png">
</head><!--/head-->
<body>
	<table width="100%" border="1">
		<thead>
			<th>No</th>
            <th>NIM</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
            <th>Vege</th>
            <th>Event</th>
			<th>DateRegis</th>
		</thead>
					<?php
                                        $num=1;
   				        $result=mysql_query("SELECT * FROM regis WHERE Event='seminar1' ORDER BY DateRegis DESC");
					while ($row=mysql_fetch_array($result)) {
						$row["Cek"]="0";
					?>
		<tr>
                        <td><?php echo $num; $num+=1; ?></td>
			<td><?php echo $row["NIM"]; ?></td>
			<td><?php echo $row["Name"]; ?></td>
			<td><?php echo $row["Phone"]; ?></td>
			<td><?php echo $row["Email"]; ?></td>
			<td><?php echo $row["Vege"]; ?></td>
			<td><?php echo $row["Event"]; ?></td>
			<td><?php echo $row["DateRegis"]; ?></td>
		</tr>
					<?php
						}
					?>
				</table>
</body>
</html>