<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry = "select * from pm_tbl WHERE isactive=1";
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

                        </B> <U>ADD PRADHAN MANTRI YOJNA</U></B>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               <div class="inn-title">
                                    <!-- <h4> Yojna Information</h4> -->
                                    
                                </div>
                <div class="bor">
                                <form action="addpm1.php" method="post" enctype="multipart/form-data" id="form-control" >
            <div class="row">
                <div class="input-field col s12">
    
        Add YOJNA  TITLE: <input type="text" name="pmyojnaname" class="form-control" required=""data-parsley-trigger="keyup" ><br>
        Add YOJNA DISCRIPTION: <input type="text" name="pmyojnadecp" class="form-control" required=""data-parsley-trigger="keyup" ><br>
        Add YOJNA LINK: <input type="text" name="pmyojnalink"class="form-control"><br>
        Add pic:<input type="file" name="fileToUpload" class="form-control"><br>
        <input  class="btn-info" type="submit" name="btn_sb" style="20%">
         <!-- <input type="submit" name="btn_sb">  -->
                                        </div>
                                    </form>
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
