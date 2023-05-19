<?php
include('conn.php');
$n=$_POST['Name'] ;
$e=$_POST['Email'] ;
$p=$_POST['Password'] ;
$cp=$_POST['ConfirmPassword'] ;



$sql= "update task set Name='$n', Email='$e',Password='$p',ConfirmPassword='$cp' ";
$qry =mysqli_query($conn,$sql);
header('location:list.php') //used to pass to another file after submit


?>