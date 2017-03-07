<?php
$host="localhost";
$user="root";
$pass="";
GLOBAL $conn;
$conn=mysqli_connect($host,$user,$pass, "togettou_robel");
if(!$conn)
{
    die("faild to connect");
}
?>
