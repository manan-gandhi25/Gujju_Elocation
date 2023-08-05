<?php include_once('common/dbconnect.php'); ?>
<?php session_start();  ?>
<?php
if (isset($_POST['addbusiness'])) {
	extract($_POST);
	$fname = $_SESSION['fn'];
	$upload = "company_logo/";
	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];
	$uploadfile = move_uploaded_file($tmp,$upload.$photo);
	echo $sql = "INSERT INTO `business`(`email`,`business_name`,`business_location`,`company_email`,`business_num`,`category_id`,`logo`,`owner_name`) VALUES ('$txt_email','$txt_fn','$txt_location','$txt_url','$txt_contact','$category_id','$photo','$fname')";
	$result = mysqli_query($conn,$sql);
	if($result){
		header('location:index.php');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:add-business.php');
		$_SESSION['errormsg'] =  "Error";
	}
}
?>