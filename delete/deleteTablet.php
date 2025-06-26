<?php
 include '../connection.php';
 if (isset($_GET['tabId'])) {
 $tabId = $_GET['tabId'];

 $deleteQuery = "DELETE FROM tablet WHERE tabId = '$tabId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the Tablet has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 } else {
 echo "Error deleting a Tablet: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('Tablet not found.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>