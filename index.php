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
        <div class="panel-heading">SAMSUNG</div>
        <div class="panel-body"><img src="samsungl.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="samsung_mobile.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">SONY</div>
        <div class="panel-body"><img src="sonyl.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="sony_mobile.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">APPLE</div>
        <div class="panel-body"><img src="applel.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="apple_mobile.php">Click Here!</a></center></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">VIDEOCON</div>
        <div class="panel-body"><img src="videoconl.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="videocon_tv.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">SONY</div>
        <div class="panel-body"><img src="sonyl.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="sony_tv.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">LG</div>
        <div class="panel-body"><img src="lgl.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="lg_tv.php">Click Here!</a></center></div>
      </div>
    </div>
  </div>
</div><br><br>

    
    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">HP</div>
        <div class="panel-body"><img src="hpl.png" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="hp_lap.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">DELL</div>
        <div class="panel-body"><img src="dell.png" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="dell_lap.php">Click Here!</a></center></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">APPLE</div>
        <div class="panel-body"><img src="applel.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="apple_lap.php">Click Here!</a></center></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-5">
        <div class="panel panel-warning" style="align:center;">
        <div class="panel-heading">MOBILE ACCESSORIES</div>
        <div class="panel-body"><img src="mobile_accessories.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="mob_acc.php">Click Here!</a></center></div>
      </div>
    </div>
      <div class="col-md-2"></div>
    <div class="col-md-5">
        <div class="panel panel-warning" style="align:center;">
        <div class="panel-heading">DESKTOPS ACCESSORIES</div>
        <div class="panel-body"><img src="laptop_accessories.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer"><center><a href="desk_acc.php">Click Here!</a></center></div>
      </div>
    </div>
   
  </div>
</div><br>
<footer class="container-fluid text-center">  
  <form class="form-inline" action="addfeed.php">FEEDBACK:
      <input type="text" class="form-control" size="100" placeholder="GIVE FEEDBACK">
      <button type="submit" class="btn btn-danger">Submit</button>
  </form>
</footer>



</body>

</html>

