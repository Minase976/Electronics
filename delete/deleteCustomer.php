<?php
 include '../connection.php';
 if (isset($_GET['customerId'])) {
 $customerId = $_GET['customerId'];

 $deleteQuery = "DELETE FROM customer WHERE customerId = '$customerId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the Customer has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/customers.php';</script>";
 exit();
 } else {
 echo "Error deleting a customer: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('customer not found.')</script>";
 echo "<script>window.location.href = '../items/customers.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>