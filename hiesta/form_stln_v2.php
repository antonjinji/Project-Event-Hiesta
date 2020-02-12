<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registration - HIESTA 2017</title>
  <link rel="stylesheet" type="text/css" href="css/regis.css">
  <link rel="shortcut icon" href="../images/logo2.png">
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

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
   
    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo2.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="">Registration Study Tour Luar Negeri</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <fieldset>
  <h1>Registration Study Tour Luar Negeri</h1><br>
    <div class="form">
      <!-- <form action="formProcess.php" onsubmit="return validate_form()" method="POST" name="regisForm"> -->
      <form action="form_stlnProcess.php" method="POST" name="regisForm">          
        <label>Type:</label>
        <select name="txtType" id="idType">
          <option value="0">Type</option>
          <option value="Cicilan">Cicilan</option>
          <option value="Cash">Cash</option>
        </select><br><br>

        <label>Number of People:</label>
        <select name="txtNum" id="idNum">
          <option value="0">Select</option>
          <option value="1" class="cicilan">1 orang (@Rp. 4.4 Juta)</option>
          <option value="2" class="cicilan">2 orang (@Rp. 4.3 Juta)</option>
          <option value="3" class="cicilan">3 orang (@Rp. 4.2 Juta)</option>
          <option value="4" class="cicilan">4 orang (@Rp. 4.1 Juta)</option>
          <option value="5" class="cicilan">5 orang (@Rp. 4.0 Juta)</option>
          <option value="1" class="cash">1 orang (@Rp. 4.2 Juta)</option>
          <option value="2" class="cash">2 orang (@Rp. 4.1 Juta)</option>
          <option value="3" class="cash">3 orang (@Rp. 4.0 Juta)</option>
        </select><br><br>
        
      <!-- <form action="formProcess.php" onsubmit="return validate()" method="" id="form" name="form-training"> -->
      <?php 
       for($i=0; $i<5; $i++){
      ?>
        <div class="<?php echo $i+1;?>">
          <hr>
          <label>Name #<?php echo $i+1; ?>:</label>
          <input type="text" name="txtName[]" id="txtName" placeholder="Name"></input><br>

          <label>NIM #<?php echo $i+1; ?>:</label>
          <input type="text" name="txtNim[]" id="txtNim" placeholder="NIM"></input><br>

          <label>Phone Number #<?php echo $i+1; ?>:</label>
          <input type="text" name="txtPhone[]" id="txtPhone" placeholder="Phone Number"></input><br>

          <label>Email #<?php echo $i+1; ?>:</label>
          <input type="text" name="txtEmail[]" id="txtEmail" placeholder="Email Address"></input><br>
          
          <label>Vegetarian #<?php echo $i+1; ?>:</label><br>
          <input type="radio" name="txtVege<?php echo $i; ?>" id="txtVegeYes" value="Yes">Yes
          <input type="radio" name="txtVege<?php echo $i; ?>" id="txtVegeNo" value="No">No<br><br>
        </div>
      <?php
       }
      ?>
        
        <br><br><br><br><br>
        <input type="submit" id="btnSubmit" value="Register"></input>
        <!-- <button type="button" value="submit" onclick="validate()">SUBMIT</button> -->
      </form>
    </fieldset>   
  </div>

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo2.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>                      
            <li><a class="facebook" href="https://www.facebook.com/Hiesta2017"><i class="fa fa-facebook"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/hiesta_2017/"><i class="fa fa-instagram"></i></a></li>   
            <li><a class="Line" href="http://line.me/ti/p/~@tng5900j"><i class="fa fa-Line"></i></a></li>      
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/validasi.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".cicilan").hide();
    $(".cash").hide();
    $(".1").hide();
    $(".2").hide();
    $(".3").hide();
    $(".4").hide();
    $(".5").hide();
    $("#idType").change(function(){
        if(this.value == "Cicilan"){
           document.getElementById("idNum").value = "0";
           $(".cicilan").show();
           $(".cash").hide();
        }
        else {
           document.getElementById("idNum").value = "0";
           $(".cicilan").hide();
           $(".cash").show();
        }
    });   
    $("#idNum").change(function(){
      if(this.value == "0"){
        $(".1").hide();
        $(".2").hide();
        $(".3").hide();
        $(".4").hide();
        $(".5").hide(); 
      }
      else if(this.value == "1"){
        $(".1").show();
        $(".2").hide();
        $(".3").hide();
        $(".4").hide();
        $(".5").hide();
      }
      else if(this.value == "2"){
        $(".1").show();
        $(".2").show();
        $(".3").hide();
        $(".4").hide();
        $(".5").hide();
      }
      else if(this.value == "3"){
        $(".1").show();
        $(".2").show();
        $(".3").show();
        $(".4").hide();
        $(".5").hide();
      }
      else if(this.value == "4"){
        $(".1").show();
        $(".2").show();
        $(".3").show();
        $(".4").show();
        $(".5").hide();
      }
      else if(this.value == "5"){
        $(".1").show();
        $(".2").show();
        $(".3").show();
        $(".4").show();
        $(".5").show();
      }
    }); 
  });
</script>
</body>
</html>