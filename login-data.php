<?php

include('data-con.php');
$id=$_COOKIE['uid'];
$query=mysqli_query($con,"select * from login where id='$id'");
$count=mysqli_num_rows($query);
if($count==1){

}else{
	header('location:index.php');
}
?>