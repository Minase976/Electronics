<?php
 include '../connection.php';
 if (isset($_GET['phoneId'])) {
 $phoneId = $_GET['phoneId'];

 $deleteQuery = "DELETE FROM phone WHERE phoneId = '$phoneId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the phone has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 } else {
 echo "Error deleting a phone: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('Phone not found.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>