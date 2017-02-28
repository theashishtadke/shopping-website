<?php
include 'connect.php';
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
function goToURL(val){
location.href = val;
}
</script>
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
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 25%;
    align: center;
    padding: 12px 20px;
    margin: 8px ;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    align:center;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: 20%;
    padding: 10px 18px;
    background-color: grey;
    align:center;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.image {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */


/* The "Forgot password" text */


</style>
<?php
session_start();
if(isset($_SESSION['userid'])){
    echo 'User is already LOGGED IN';
header('Location: index.php');
}?>

    <title> ETRONCS LOGIN </title>
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
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"> </span> Home</a>
          </li>
      </ul>
          
          <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>


	<form action="authenticate.php" method='post'>
		<div class="imgcontainer">
                    <img src="etronics-1437056133.jpg" width=10% alt="image" />
  </div>
            <center>
  <div class="container">
      
      <label><b><u>UserID:</u></b></label><br>
              <td><input type="text" placeholder="Enter UserID" name="userid"  required>
    <br>
    
    <label><b><u>Password:</u></b></label><br>
    <input type="password" placeholder="Enter Password" name="password"  required><br>
    <input type="checkbox" > Remember me<br>       
		   <button type="submit">Login</button>
  </div>

                <div class="container">
                    <button type="button" class="cancelbtn" onclick="javascript:goToURL('register.php')">Register</button></div>
  </div></center>
	</form>
</body>
</html>