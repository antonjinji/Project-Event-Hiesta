<?php   
    session_start();
    $price=$_GET['price'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>HIESTA 2017</title>
  <link rel="stylesheet" type="text/css" href="css/aftersubmit.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="shortcut icon" href="images/icon.png">
  <meta http-equiv="refresh" content="120;url=index.html">
</head>

<body>

<div class="container animated fadeInLeftBig">   <br><br><br><br>
    <div class="row col-sm-12 displaystyle-leftborder displaystyle-success displaystyle-lg" align="center">
        <strong>SUCCESS!</strong> Your form has been successfully submitted.<br>
        <strong>Your total payment is Rp. <?php echo $price; ?><br></strong>
        Pembayaran melalui transfer bisa ke 6041273876 a/n julius wijanarko<br>
        Pembayaran melalui cash bisa kunjungi stand hiesta yg buka di lobby binus
        <br><br><br><br>
        <div class="loader"></div>
        <h6>You'll be automatically redirected to HIESTA 2017 home page</h6>
        <a href="index.html">Click here if loading takes too long</a>
    </div>
    
</div>
</body>
</html>