<?php
 include '../connection.php';
 if (isset($_GET['pcId'])) {
 $pcId = $_GET['pcId'];

 $deleteQuery = "DELETE FROM laptop WHERE pcId = '$pcId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the laptop has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 } else {
 echo "Error deleting a laptop: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('laptop not found.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>