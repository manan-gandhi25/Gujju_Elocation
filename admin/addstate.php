<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM state_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
?>
<?php include'header.php'?>
<!--header end-->
<!--sidebar start-->
<?php include'sidebar.php'?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel">
                        <header class="panel-heading">
                            <b><u>ADD NEW STATE</u></b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               <div class="inn-title">
                                    <h4><B><U> NEW STATE</h4></U>
                                    <BR>
                                </div>
                <div class="bor">
                                <form action="addstate1.php" method="get">

                    State Name :<BR> <input type="text" name="sname" class="form-control"placeholder="Enter Username" required=""data-parsley-trigger="keyup" ><BR>
                                 <input type="submit" name="btn_sb"  class="btn-info">
                                 </div>
                            </div>
                        </div>
                                                    </div>

                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
          <?php include'footer.php'?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<?php include'script.php'?>
</body>
</html>
