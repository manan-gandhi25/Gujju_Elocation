<?php
session_start();
?>
<?php
require './common/dbconnect.php';
$qry = "select * from schoff_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
<head>
	<?php include'head.php'?>
	
	
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
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/various-white-icon-contact-message-260nw-1590179125.webp;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">ADD YOUR BUSINESS</h1>
					
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Contact area -->
        <div class="content-block">
			<div class="section-full content-inner bg-white">
				<div class="container">
					<form action="addbusinessaction.php" method="post" enctype="multipart/form-data">
	<!-- <input type="hidden" value="Contact" name="dzToDo" >  -->
                             <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <div class="input-group">
                                     <input type="text" name="txt_fn" required class="form-control" placeholder="Your Business Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Email Id</label>
                                            <div class="input-group"> 
											    <input type="text"name="txt_email" class="form-control" placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Location</label>
                                            <div class="input-group"> 
											    <input type="text"name="txt_location" class="form-control" placeholder="Location" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Email Or URL</label>
                                            <div class="input-group"> 
											    <input type="text"name="txt_url" class="form-control" placeholder="Enter Your Business Email Or URL" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Business Category</label>
                                            <div class="input-group"> 
											    <select name="category_id" class="form-control">
                                                    <option value="">Select Your Category</option>
                                                        <?php
                                                        require './common/dbconnect.php';
                                                        $sql = mysqli_query($conn,"select * from `dep_tbl` ");  
                                                        while ($row = mysqli_fetch_array($sql)){ ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['depname']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <div class="input-group">
                        <input type="number" name="txt_contact" class="form-control"  placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Company Logo</label>
                                            <div class="input-group">
                        						<input type="file" name="photo" class="form-control"  placeholder="photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                 <button type="submit" class="site-button button-lg radius-xl" name="addbusiness">Submit</button>
                                        <!-- <button name="submit" type="submit" value="Submit" class="site-button button-lg radius-xl">SUBMIT NOW</button> -->
                                    </div>
                                </div>
                            </form>
				</div>
			</div>
		</div>
	</div>
</div>
    <!-- Content END-->
	<!-- Footer -->
		<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
						<span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>
						<a href="javascript:void(0);">Gujju eLocation </a> All rights reserved.</span> 
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

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:04 GMT -->
</html>