<?php
 include '../connection.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $newPhone_name = $_POST['phone_name'];
 $newprice = $_POST['price'];
 $newmodel = $_POST['model'];
 $phoneId = $_POST['phoneId'];

 $updateQuery = "UPDATE phone SET
Phone_name = '$newPhone_name',
model = '$newmodel',
price = '$newprice'
WHERE phoneId = '$phoneId'";
 if (mysqli_query($databaseConnection, $updateQuery)) {
 echo "<script>alert('Phone updated successfully.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 } else {
 echo "Error updating product: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('this type of not found.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>
