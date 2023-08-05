<?php
session_start();
require '../common/dbconnect.php';

//var_dump($_POST);
if (!isset($_POST["login"]))
{
    header("location:login.php");
    exit();
}
$us=$_POST['txt_un'];
$ps=$_POST['txt_ps'];
$qry="SELECT * FROM user_tbl WHERE email='".$us."' AND password='".$ps."' AND user_type=2 AND isactive=1";

// echo "$qry";
$rs=mysqli_query($conn,$qry);
// var_dump($rs);
if (mysqli_num_rows($rs)>0)
{
    // $row=mysqli_fetch_assoc($rs);
    $row=mysqli_fetch_assoc($rs);

    $id=$row['id'];
    // echo $id;
    $fn=$row['firstname'];
    $_SESSION['adminid']=$id;
    

    $_SESSION['fn']=$fn;
    $_SESSION['admin']=1;
    if (isset($_POST['remember']))
    {
        setcookie("user",$us,time() + (86400*30),"/");
        setcookie("pass",$ps,time() + (86400*30),"/");
    }
header("location:dashboard.php");
exit();
}
else
{
    echo "Login Error";
    exit();
}
?>