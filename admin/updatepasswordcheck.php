<?php
require 'common/dbconnect.php';
var_dump($_POST);
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$utype=1;

if(!$pass==$cpass)
{
	echo "Pass and Cpass Error";
	exit();
}

$qry1="SELECT * FROM user_tbl WHERE email='".$email."'";
$rs1=mysqli_query($conn,$qry1);

if(mysqli_num_rows($rs1)>0)
{
	echo "email already exist!";
	exit();
}
$qry="INSERT into user_tbl(password,user_type) VALUES('".$pass."',,z)";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:login.php");
}
else
{
	echo "Insert Error";
}
?>