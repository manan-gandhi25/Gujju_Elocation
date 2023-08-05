
<?PHP include'header.php'?>
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
                          <u><b>ADD CATEGORY</u>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
    <form action="adddep1.php" method="POST" id="validate form" enctype="multipart/form-data">
                <div class="form-group">
                   ADD NEW CATEGORY<br>
                   <br>
<label>Category Name</label>
<input type="text" name="depname" class="form-control" placeholder="Enter Username" required=""data-parsley-trigger="keyup">
<label>Category Image</label>
<input type="file" name="deppic" class="form-control" placeholder="Enter Username" required=""data-parsley-trigger="keyup">
                                    
                                </div>
                                
   <input type="submit" name="btn_sb" class="btn-info">
                            
                               <!-- <input  type="submit" name="btn_sb" style="width: 50;"class="btn btn-info"> --> 
                                <!-- <button type="submit" class="btn btn-info">Submit</button> -->
                            </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br><br><br><br><br><br><br><br><br><br><br>
          <?php include'footer.php'?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<?php include'script.php'?>
</body>
</html>
