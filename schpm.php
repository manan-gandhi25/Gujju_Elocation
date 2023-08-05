<?php 
require 'common/dbconnect.php';
$searach=$_POST['searech'];
// echo $searach;

$select="select * from business where Isactive=1 and business_name like '%".$searach."%' OR
        business_name like '%".$searach."%' OR business_name like '%".$searach."%'";

        $query=mysqli_query($conn,$select);
?>
<table border="3" class="table table-bordered">
                                    <!-- <table border="1"> -->
    <tr>
       
        
    </tr>
      <?php
     if (mysqli_num_rows($query)>0) {
     
      while($row=mysqli_fetch_assoc($query)) {
        ?>
    <tr>
       <td><a href="listing-details.php?id=<?php echo $row['id']?>"><?php echo $row['business_name']; ?></a></td>
       <td><a href="listing-details.php?id=<?php echo $row['id']?>"><?php echo $row['business_name']; ?>
   </a></td>
    </tr>
    <?php 
         
      }
     }
    else
     {
     	echo "No Record Found";
     }
     ?>
</table>
