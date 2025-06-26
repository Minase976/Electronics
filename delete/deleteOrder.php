<?php
 include '../connection.php';
 if (isset($_GET['orderId'])) {
 $orderId = $_GET['orderId'];

 $deleteQuery = "DELETE FROM orders WHERE orderId = '$orderId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the order has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/orders.php';</script>";
 exit();
 } else {
 echo "Error deleting a order: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('order not found.')</script>";
 echo "<script>window.location.href = '../items/orders.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>