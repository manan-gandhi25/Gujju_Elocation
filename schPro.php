<?php 
require 'common/dbconnect.php';
$searach=$_POST['searech'];

$select="select * from dep_tbl where isactive=1 and depname like '%".$searach."%' OR
        depname like '%".$searach."%' OR depname like '%".$searach."%'";

        $query=mysqli_query($conn,$select);
?>
<table border="3" class="table table-bordered">
                                    <!-- <table border="1"> -->
    <tr>
       
       
        <th>view Schemes And Offers Title</th>
    </tr>
      <?php
     if (mysqli_num_rows($query)>0) {
     
      while($row=mysqli_fetch_assoc($query)) {
        ?>
    <tr>
       <td><a href="listing-details.php?id=<?php echo $row['id']?>"><?php echo $row['depname']; ?></a></td>
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