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
    <form method="POST">
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
        <div class="panel-heading">Samsung Galaxy S7</div>
        <div class="panel-body"><img src="samsung1.jpg" class="img-responsive" style="width:50%" alt="Image">
	<ul><li>4 GB RAM | 32 GB ROM | Expandable Upto 200 GB</li><br>
    <li> 5.1 inch Quad HD Display</li><br>
    <li>12MP Primary Camera | 5MP Front</li><br>
    <li>3000 mAh Li-Ion Battery</li><br>
    <li>Exynos 8890 Processor</li><br></ul></div>
        <div class="panel-footer"><center>Price: Rs 50900/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Samsung Galaxy On8</div>
        <div class="panel-body"><img src="samsung2.jpg" class="img-responsive" style="width:50%" alt="Image">
	<ul><li>3 GB RAM | 16 GB ROM | Expandable Upto 128 GB</li><br>
    <li>5.5 inch Full HD Display</li><br>
    <li>13MP Primary Camera | 5MP Front</li><br>
    <li>3300 mAh Li-Ion Battery</li><br>
    <li>S5E7580 (Exynos 7580) Processor</li><br></ul></div>
        <div class="panel-footer"><center>Price: Rs 14900/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">Samsung Galaxy Note7</div>
        <div class="panel-body"><img src="samsung3.jpg" class="img-responsive" style="width:50%" alt="Image">
	<ul><li>OS: Android OS, v5.1.1 (Lollipop)</li><br>
    <li>Display: 5.7 inches (~75.9% screen-to-body ratio) - 1440 x 2560 pixels</li><br>
    <li>Camera: 16 MP, 5312 x 2988 pixels,</li><br>
    <li>Internal Memory 32GB 4 GB RAM</li><br>
    <li>4000 mAh Li-Ion Battery.</li><br></ul>
		</div>
        <div class="panel-footer"><center>Price: Rs 69900/-<br><a href="#">Buy Now!</a></center></div>
      </div>
    </div>
  </div>
</div><br>

 </form>
</footer>



</body>


</html>
