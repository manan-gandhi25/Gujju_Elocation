<?php

$uid=$_GET['id'];
$date=date('y-m-d');
require '../common/dbconnect.php';

$qry="UPDATE user_tbl SET isactive=2,dou='".$date."' where id=$uid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
   header("location:alluser.php");
   exit();
}
else
{
   echo "error";
}
?>