<?php
 include '../connection.php';
 if (isset($_GET['earId'])) {
 $earId = $_GET['earId'];

 $deleteQuery = "DELETE FROM earphone WHERE earId = '$earId'";
 if (mysqli_query($databaseConnection, $deleteQuery)) {
 echo "<script>alert('the Earphone has Deleted successfully.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 } else {
 echo "Error deleting a earphone: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('Earphone not found.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>