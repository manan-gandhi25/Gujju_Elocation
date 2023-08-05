<?php
require '../common/dbconnect.php';
var_dump($_GET);
$squestion=$_GET['squestion'];
$isactive=1;
$qry="INSERT into seq_tbl(squestion,isactive) VALUES('".$squestion."',$isactive)";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	//echo "Insert Success";
	header("location:viewseq.php");
    exit();

}
else
{
	echo "Insert Error";
}
?>