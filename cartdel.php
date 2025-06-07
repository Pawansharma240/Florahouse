<?php
include("connect.php");
$id=$_GET['id'];
mysqli_query($conn,"delete from cart where product_id='$id'");
header("location:cart.php");
?>