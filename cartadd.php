<?php
include("connect.php");
$id=$_GET['sid'];
$ip=$_SERVER['REMOTE_ADDR'];
$q=1;
mysqli_query($conn,"insert into cart values('','$id','$q','$ip')");
?>
<script>
    alert('successfuly added in cart');
    history.back();
</script>



