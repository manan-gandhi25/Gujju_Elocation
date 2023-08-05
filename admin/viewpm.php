<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM pm_tbl WHERE isactive!=2";
// echo "$qry";
$rs = mysqli_query($conn,$qry);
?>
<?php include'header.php'?>
<!--header end-->
<!--sidebar start-->
<?php include'sidebar.php'?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
<B> <U>  YOJNA INFORMATION</B></U>
    </div>
    <div>
       <div class="inn-title">
                                    <!-- <h4> Yojna Information</h4> -->
                                    
                                </div>
                <div class="bor">
                  <table class="table table-hover table-dark" border="3">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>yojna nameName</th>
                        <th>Description</th>
                        <Th>profilepic</th>
                        <th>link</th>
                        <th>isactive</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    
                    </tr>
                </thead>
                <?php
                if(mysqli_num_rows($rs)>0)
                {
                    //echo "True";
                    while($row=mysqli_fetch_assoc($rs))
                    {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['pmyojnaname']?></td>
                    <td><?php echo $row['pmyojnadecp']?></td>
                    <td><img src="../upload/<?php echo $row['profilepic']; ?>" width="80" height="80"></td>
                    <!-- <td><?php echo $row['profilepic']; ?></td> -->
                     <td><?php echo $row['pmyojnalink']?></td>
                    <td><?php $ia=$row['isactive']; echo $ia;?></td>
                    <td><a href="editpm.php?id=<?php echo $row['id'];?>"
                    >Edit</a></td>

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
                     <td><a href="deletepm.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    

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
