<?php
include('data-con.php');
$id=$_GET['cid'];
mysqli_query($con,"delete from question where id='$id'");
header('location:quer.php?cid=1');
?>