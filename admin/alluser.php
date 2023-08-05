<!-- PHP CODE -->
<?php
    require '../common/dbconnect.php';
    $qry="SELECT * FROM user_tbl WHERE isactive !=2 and user_type=1";
    // echo $qry;
    $rs=mysqli_query($conn,$qry);
?>
<?php include'header.php'?>
<!--header end-->
<!--sidebar start-->
<aside>
    <?php include'sidebar.php'?>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     <B> <U>VIEW ALL USERS</B></U>
    </div>
    <div>
      <div class="table-responsive table-desi">
        <table class="table table-hover"border="3">
                                        <!-- <table border="1"> -->
        <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>PROFILE PIC</th>
        <th>NUMBER</th>
        <th>DOB</th>
        <th>ISACTIVE</th>
        <th>USERTYPE</th>
        <th>EDIT</th>
        <th>DELETE</th>
        <!-- <td>Isactive</td>
        <td>Usertype</td>
        <td>Edit</td>
        <td>delete</td>  -->
    </tr>
<?php 
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_assoc($rs))
    {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><img src="../upload/<?php echo $row['profilepic']; ?>" width="80" height="80"></td>
         <!-- <td><?php echo $row['profilepic']; ?></td> -->
          <td><?php echo $row['mobile']; ?></td>
           <td><?php echo $row['dob']; ?></td>
        <td><?php echo $row['isactive']; ?></td>
        <td><?php echo $row['user_type']; ?></td>
         <td><a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a></td>
         <td><a href="deleteuser.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
<?php
}
}
else
{
    echo "0 Row Found";
}

?>
</table>
                                    </div>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
          <?php include'footer.php'?>
  <!-- / footer -->
</section>

<!--main content end-->
<?php  include'script.php'?>
</body>
</html>
