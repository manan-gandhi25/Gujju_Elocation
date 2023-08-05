<?php 
require '../common/dbconnect.php';

$id=$_GET['id'];

  $update="update city_tbl set isactive=2 where id='".$id."'";
  $query=mysqli_query($conn,$update);
   if ($query) {
   echo "Data updated";
   header("location:viewstatecity.php");
   exit();
   }
   else{
   	echo "error";
   }
?>