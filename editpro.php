<?php
include('conn.php');
$id=$_POST["id"];
$n=$_POST['name'] ;
$e=$_POST['email'] ;
$p=$_POST['password'] ;
$cp=$_POST['confirmpassword'] ;
 



$sql= "update task set Name='$n', Email='$e',Password='$p',ConfirmPassword='$cp' where id='$id' ";
$qry =mysqli_query($conn,$sql);
header('location:list.php') //used to pass to another file after submit


?>