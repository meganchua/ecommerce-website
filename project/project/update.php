<?php
include_once 'includes/init.php';
$conn;

mysqli_select_db($conn,'orders');

$sql = "UPDATE orders SET quantity =='$_POST[quantity]', size == '$_POST[size]'";
$featured = mysqli_query($conn,$sql);

if(mysqli_query($conn,$sql))
  header("refresh:1; url=index.php");
else
  echo "Order failed";

 ?>
