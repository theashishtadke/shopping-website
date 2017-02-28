<?php 
include 'connect.php';

$name =$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$userid=$_POST['userid'];
$password=$_POST['password'];
$res1=mysql_query("select * from user_details where userid='$userid'");

	$count=mysql_num_rows($res1);

	

	if($count!=0)

	{

			

					 echo '<script>alert("You Have Already Registered Please Login..");</script>';	
                                         header('refresh:0 ;url=login.php');

	

	}

 	 else

 	{


        $sql_users="INSERT INTO user (Name,Address,Contact,email,userid,password) VALUES ('$name','$address','$contact','$email','$userid','$password')";
        if(mysqli_query($connect,$sql_users))
        {
	echo '<script>alert("User is Registered Successfully.");</script>';
        header('refresh:0 ;url=index.php');
        }
        else
        {
            echo '<script>alert("Registration unseccessful, Please try again.");</script>';
            header('refresh:0 ;url=register.php');
        }
        }

?>