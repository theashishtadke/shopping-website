<?php
include 'connect.php';

$userid=$_POST['userid'];
$password=$_POST['password'];
$sql_users="SELECT * FROM user WHERE userid='$userid' and password='$password' ";
$result_users=mysqli_query($connect,$sql_users);
if(mysqli_num_rows($result_users) <= 0)
{
	echo '<script>alert("No users found with entered userid and password combination");</script>';
        header('refresh:0 ;url=login.php');
}
else
{
	
	$row_users=mysqli_fetch_array($result_users);
	session_start();
	$_SESSION['userid']=$row_users['userid'];
	$_SESSION['Name']=$row_users['Name'];
        echo '<script>alert("Login Successful.");</script>';	
        header("refresh:0 ;url=index.php");

}
?>