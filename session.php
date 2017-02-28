<?php
session_start();
echo $_SESSION['userid'],"<br>";
echo $_SESSION['name'],"<br>";
echo $_SESSION['email'];
?>