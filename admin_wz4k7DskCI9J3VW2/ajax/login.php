<?php
sleep(1);
include('../db/config.php');


$email_id=$_POST['email_id'];
$password=$_POST['password'];


$query=mysqli_query($conn,"select * from tbl_login where email_id='$email_id' and password='".md5($password)."' and is_active=1");

$count=mysqli_num_rows($query);

if($count==1)
{
	$_SESSION['email_id']=$email_id;
	$attr=array('status'=>'success','msg'=>'Login Successfull !');
}
else
{
	$attr=array('status'=>'error','msg'=>'Enter a valid Email ID or Password');
	
}


echo json_encode($attr);
