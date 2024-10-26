<?php
include('data-con.php');
$id=$_GET['cid'];
mysqli_query($con,"delete from donate where id='$id'");
header('location:donorlist.php?cid=1');
?>