<?php 
require '../common/dbconnect.php';
if (!isset($_GET['id'])) {
	// header("location:viewuser.php");
	exit();
}
$id=$_GET['id'];

  $update="update schoff_tbl set isactive=2 where id='".$id."'";
   $query=mysqli_query($conn,$update);
   if ($query) {
   echo "Data updated";
   header("location:viewoffsch.php");
   exit();

   }
   else{
   	echo "error";
   }
?>