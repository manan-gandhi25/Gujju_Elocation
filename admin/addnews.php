<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry = "select * from news_tbl WHERE isactive=1";
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
                            <b><u>ADD NEW NEWS</u></b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="addnews1.php" method="post" enctype="multipart/form-data" id="validate-form">
                         <div class="row">
                <div class="input-field col s12">
    
        Add News Title: <input type="text" name="newsname" class="form-control"placeholder="Enter Username" required=""data-parsley-trigger="keyup" required=""><br>
        <!-- Add News Discription: <input type="text" name="newsdes"class="form-control"placeholder="Enter Username" required=""data-parsley-trigger="keyup" ><br> -->
        Add News link: <input type="text" name="newslink"class="form-control"placeholder="Enter Username" required=""data-parsley-trigger="keyup" required="" ><br>
        <!-- <div class="form-group">
                    Upload Profile Pic
       <input type="file" class="form-control" name="fileToUpload" >
                  </div> -->
        <!-- <input class="waves-effect waves-light btn-large btn-log-in " type="submit" name="btn_sb" style="20%"> -->
         <input type="submit" name="btn_sb" class="btn-info"> <br>
                                        </div>
                                    </form>
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
