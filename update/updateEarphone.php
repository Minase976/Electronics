<?php
 include '../connection.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $newear_name = $_POST['earName'];
 $newprice = $_POST['price'];
 $newmodel = $_POST['model'];
 $earId = $_POST['earId'];

 $updateQuery = "UPDATE earphone SET
earName = '$newear_name',
model = '$newmodel',
price = '$newprice'
WHERE earId = '$earId'";
 if (mysqli_query($databaseConnection, $updateQuery)) {
 echo "<script>alert('Earphone updated successfully.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 } else {
 echo "Error updating product: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('this type of not found.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>
