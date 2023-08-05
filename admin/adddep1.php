<?php include_once('../common/dbconnect.php'); ?>
<?php
if (isset($_POST['btn_sb'])) {
	extract($_POST);
	$upload = "category_img/";
	$deppic = $_FILES['deppic']['name'];
	$tmp = $_FILES['deppic']['tmp_name'];
	$uploadfile = move_uploaded_file($tmp,$upload.$deppic);
	echo $sql = "INSERT INTO `dep_tbl`(`depname`,`photo`,`isactive`) VALUES ('$depname','$deppic','1')";
	$result = mysqli_query($conn,$sql);
	if($result){
		header('location:viewdep.php');
		$_SESSION['succmsg'] = "Your Data Has Been Saved";
	}else{
		header('location:adddep.php');
		$_SESSION['errormsg'] =  "Error";
	}
}
?>