<?php
require './common/dbconnect.php';
$id=$_GET['id'];
$qry1 = "SELECT  * FROM business WHERE category_id='".$id."'";
// echo $qry;
$rs1=mysqli_query($conn,$qry1);
$row1 = mysqli_fetch_assoc($rs1);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="BizMap Directory & Listings HTML templates" />
    <meta property="og:title" content="BizMap Directory & Listings HTML templates" />
    <meta property="og:description" content="BizMap Directory & Listings HTML templates" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>local search engine</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/templete.css">
    <link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="css/star-rating-svg.css">
    
    
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header-transparent mo-left">
        <!-- main header -->
        <?php include'topnav.php'?>
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/wall-2396055__480.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <div class="wonder-bx text-white">
                    <?php $sql = mysqli_query($conn,"SELECT * FROM `dep_tbl` WHERE `id` = '".$row1['category_id']."' ");
                        $fetch = mysqli_fetch_array($sql);
                    ?>
                        <div class="wonder-title">
                            <h2><?php echo $fetch['depname'];?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <div class="container">
                
            <div class="row">
                    <!-- Left part start -->
                    <div class="col-xl-8 col-lg-7 col-md-12 p-b30">
                        <?php
                            require './common/dbconnect.php';
                            $id=$_GET['id'];
                            $qry = "SELECT  * FROM business WHERE category_id='".$id."'";
                            $rs = mysqli_query($conn,$qry);
                            $num = mysqli_num_rows($rs);
                            if ($num > 0) {
                                while($row = mysqli_fetch_array($rs)){
                        ?>
                        <div class="section-head text-black mb-3">

                            <h2 class="box-title"><?php echo $row['business_name'];?></h2>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="" src="./company_logo/<?php echo $row['logo']; ?>"  width="" alt="" class="img-fluid img-responsive">
                            </div>
                            <div class="col-md-8">
                            <table class="table table-bordered">
                                <tr>
                                    <td><label>Business Owner:- </label></td>
                                    <td><p class="font-weight-300"><?php echo $row['owner_name'];?>   
                            </p></td>
                                </tr>
                                
                                <tr>
                                    <td><label>Business E-Mail:- </label></td>
                                    <td><p class="font-weight-300"><?php echo $row['company_email'];?>   
                            </p></td>
                                </tr>
                            
                                <tr>
                                    <td><label>Contect No.:- </label></td>
                                    <td><p class="font-weight-300"><?php echo $row['business_num'];?>   
                            </p></td>
                                </tr>
                                <tr>
                                    <td><label>Location:- </label></td>
                                    <td><p class="font-weight-300"><?php echo $row['business_location'];?> 
                            </p></td>
                                </tr>
                            
                            
                            
                            
                            
                            
                            </table>
                            </div>
                        </div>
                        <?php } } ?>
                        <div class="dlab-divider bg-gray-dark"></div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h3 class="font-26">Your Reviews</h3>
                                <div class="clearfix">
                                    <!-- comment list END -->
                                    <ol class="comment-list">
                                        <?php 
                                        $select="select * from review_tbl where isactive=1";
                                        $query=mysqli_query($conn,$select);
                                        if (mysqli_num_rows($query)>0) {
                                         while ($row1=mysqli_fetch_assoc($query)) {
                                                
                                                
                                        
                                     ?>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  src="upload/<?php echo$row1['profilepic']; ?>" width="50px" alt=""> <cite class="fn"><?php echo $row1['name']; ?></cite> <span class="says">says:</span> </div>
                                               
                                                <p><?php echo $row1['comment']; ?></p>
                                                
                                            </div>
                                            <?php 
                                     }
                                         }
                                      ?>
                                        </li>
                                       
                                    </ol>
                                    <!-- comment list END -->
                                    <!-- Form -->
                                    <h3 class="font-26">Write a Review</h3>
                                    <div class="comment-respond" id="respond">
                                        <form class="comment-form" method="post" action="reviewprocess.php" enctype="multipart/form-data">
                                            
                                            <p class="comment-form-comment">

                                                <label for="comment">Comments</label>
                                                <textarea rows="8" txt_comment placeholder="Type your comments...." name="txt_comment"></textarea>
                                            </p>
                                            <p class="comment-form-author">
                                                
                                                <label for="author">Type your name.... <span class="required">*</span></label>
                                               <input type="text" class="form-control" name="txt_name" placeholder="Type your name...." >
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Type your email.... <span class="required">*</span></label>
                                                <input type="text" name="txt_email" placeholder="Type your email...." name="email" id="email">
                                            </p>
                                            <div class="omment-form-profilepic">
                                        <label class="text-white"> Upload Profile Pic</label>
                                        <input type="file" class="form-control" name="fileToUpload">
                                    </div>
                                            
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit site-button" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div>

                                    <!-- Form -->
                                </div>
                            </div>
                        </div>
                        <!-- blog END -->
                    </div>

                    <!-- Left part END -->
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>
                        <a href="javascript:void(0);">Local Search Engine </a> All rights reserved.</span> 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="js/jquery.star-rating-svg.js"></script><!-- STAR RATING SVG -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&amp;sensor=false"  ></script><!-- GOOGLE MAP -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/map.script.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:07 GMT -->
</html>