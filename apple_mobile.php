<!DOCTYPE html>
<?php
include 'connect.php';
?>

<html lang="en">
<head>
  <title>ETRONICS SHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
      height: 200px;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
   li {
    float: left;
}




 a, .dropbtn {
    display: inline-block;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}



.dropdown {
    display: inline-block;
    position: fixed;  z-index: 1;

}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
} 

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: inline-block;
    position: absolute;
    
}
.row{
    z-index: -1;
}
</style>
</head>
<body>

<div class="jumbotron">
  <div class="container">
      <div class="row"> 
          <div class="col-md-4">
              <img src="etronics-1437056133.jpg" width="50%" style="align:center;" />
          </div>
          <div class="col-md-8">
             <h1>ETRONICS SHOP</h1>
             <p>Enjoy Excellent Shopping Experience</p>
          </div>
      </div>
    </div>
</div>
   

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li><a href="order.php" style="text-decoration:none;color:white;"><span class="glyphicon glyphicon-shopping-cart"></span> Order</a>
</li>
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> </span> Home</a></li>
          <li class="dropdown"><a class="dropbtn" href="#"  >Mobiles</a>
                <div class="dropdown-content">
                 <a href="samsung_mobile.php">SAMSUNG</a>
                 <a href="sony_mobile.php">SONY</a>
                 <a href="apple_mobile.php">APPLE</a>
                </div>
        </li>
        <li class="dropdown"><a class="dropbtn"  href="#" >Televisions</a>
            <div class="dropdown-content">
                <a href="videocon_tv.php">VIDEOCON</a>
                <a href="sony_tv.php">SONY</a>
                <a href="lg_tv.php">LG</a>
            </div>
        </li>
        <li class="dropdown"><a class="dropbtn"  href="#" >Laptops</a>
            <div class="dropdown-content">
                <a href="hp_lap.php">HP</a>
                <a href="dell_lap.php">DELL</a>
                <a href="apple_lap.php">APPLE</a>
            </div>
        </li>
        <li class="dropdown"><a class="dropbtn"  href="#" >ACCESSORIES</a>
            <div class="dropdown-content">
                <a href="mob_acc.php">MOBILE</a>
                <a href="desk_acc.php">DESKTOPS</a>
            </div>
           
        </li>
        
      </ul>
        <?php 
      session_start();
            if(isset($_SESSION['userid'])):
     echo' <ul class="nav navbar-nav navbar-right">
        <li><a ><span class="glyphicon glyphicon-user"></span> Welcome '.$_SESSION['Name'].'</a></li>
             
        <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> LogOut</a></li>
      </ul>';
      else:
      echo'<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> LogIn</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
      </ul>
      ';endif;
      ?>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Apple Iphone 7s</div>
        <div class="panel-body"><img src="apple1.jpg" class="img-responsive" style="width:50%" alt="Image">
	<ul><li>2MP primary camera with optical image stabilisation</li><br>
	<li>4.7-inch (diagonal) Retina HD 3D Touch capacitive touchscreen</li><br>
	<li>iOS 10 and iCloud operating system with A10 Fusion chip</li><br>
	<li>Non-removable Li-Ion 1960 mAh battery (7.45 Wh) </li><br>
	<li>1 year manufacturer warranty for device </li><br></ul></div>
        <div class="panel-footer"><center>Price: Rs 50000/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Apple Iphone 6s</div>
        <div class="panel-body"><img src="apple2.jpeg" class="img-responsive" style="width:50%" alt="Image">
	<ul><li>2 GB RAM | 32 GB ROM |</li><br>
    <li>4.7 inch Retina HD Display</li><br>
    <li>12MP Primary Camera | 5MP Front</li><br>
    <li>1715 mAh Li-Ion Battery</li><br>
    <li>A9 Chip with 64-bit Architecture and M9 Motion Co-processor Processor</li><br></ul>
	</div>
        <div class="panel-footer"><center>Price: Rs 50000/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Apple Iphone 5s</div>
        <div class="panel-body"><img src="apple3.jpeg" class="img-responsive" style="width:50%" alt="Image">
	<ul<li>1 GB RAM | 16 GB ROM |</li><br>
    <li>4 inch Retina Display</li><br>
    <li>8MP Primary Camera | 1.2MP Front</li><br>
    <li>1560 mAh Li-Ion Battery</li><br>
    <li>A7 Chip with 64-bit Architecture and M7 Motion Coprocessor Processor</li><br></ul></div>
        <div class="panel-footer"><center>Price: Rs 19900/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
  </div>
</div><br>
 </form>
</footer>



</body>

</html>
