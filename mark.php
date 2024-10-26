<?php
include('data-con.php');
$id=$_GET['cid'];
mysqli_query($con,"update  question set markasread='2' where id='$id'");
header('location:quer.php?cid=1');
?>