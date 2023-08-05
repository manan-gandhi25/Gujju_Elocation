<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM feed_tbl WHERE isactive!=2";
// echo "$qry";
$rs = mysqli_query($conn,$qry);
?>

<?php include'header.php'?>

<!--sidebar start-->
<?php include'sidebar.php'?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
<B> <U>  ALL FEEDBACK INFORMATION</B></U>
    </div>
    <div>
       <div class="inn-title">
                                    <!-- <h4> Yojna Information</h4> -->
                                    
                                </div>
                <div class="bor">
                  <table class="table table-hover" border="3">
    <tr>
        <th>Id</th>
        <th>Feed Name</th>
        <th>Message</th>
        <th>profilepic</th>
        <th>isactive</th>
        <!-- <td>Edit</td> -->
        <th>Delete</th>
    
    </tr>
<?php
if(mysqli_num_rows($rs)>0)
{
    //echo "True";
    while($row=mysqli_fetch_assoc($rs))
    {
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['comment']?></td>
    <td><img src="../upload/<?php echo $row['profilepic']; ?>" width="80" height="80"></td>
    <td><?php $ia=$row['isactive']; echo $ia;?></td>
    <!-- <td><a href="editpm.php?id=<?php echo $row['id'];?>"
    >Edit</a></td> -->

<?php
if($ia==1)
{
?>
<!-- Block -->
<?php
}
else
{?>
Active
<?php
}?>
</a></td>
     <td><a href="deletefeedback.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    

</tr>
<?php
}
}
else{
    echo "0 Row Found";
}
?>
</table>           

                               </div>
                            </div>
                        </div>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
          <?php include'footer.php'?>
  <!-- / footer -->
</section>

<?php include'script.php'?>
</body>
</html>
