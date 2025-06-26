<?php
 include '../connection.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $newpc_name = $_POST['pcName'];
 $newprice = $_POST['price'];
 $newmodel = $_POST['model'];
 $phoneId = $_POST['pcId'];

 $updateQuery = "UPDATE laptop SET
pcName = '$newpc_name',
model = '$newmodel',
price = '$newprice'
WHERE pcId = '$pcId'";
 if (mysqli_query($databaseConnection, $updateQuery)) {
 echo "<script>alert('laptop updated successfully.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 } else {
 echo "Error updating product: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('this type of not found.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>
