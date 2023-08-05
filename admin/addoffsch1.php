<?php
require '../common/dbconnect.php';
// var_dump($_POST);
// exit();
var_dump($_FILES);
// $did=$_GET['did'];
$deptid=$_POST['did'];
$schoffname=$_POST['schoffname'];
$schoffdecp=$_POST['schoffdecp'];
$schofflink=$_POST['schofflink'];
$doi=date('Y-m-d H:m:s');
$isactive=1;

// if($conn,$qry)
// {
// 	echo "Pass and Cpass Error";
// 	exit();
// }
if($_FILES['fileToUpload']['name']=="")
{	

	$profilepic="avatar.png";
}
else
{	
	require 'finalupload.php';
	$profilepic=$_FILES['fileToUpload']['name'];
}
$qry="INSERT into schoff_tbl(did,schoffname,schoffdecp,schofflink,profilepic,isactive,doi) VALUES('".$deptid."','".$schoffname."','".$schoffdecp."','".$schofflink."','".$profilepic."',$isactive,'".$doi."')";
// echo $qry;
// exit();
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:viewoffsch.php");
	exit();
}
else
{
	echo "Insert Error";
}
?>
