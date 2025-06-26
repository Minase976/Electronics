<?php
 include '../connection.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $newtab_name = $_POST['tabName'];
 $newprice = $_POST['price'];
 $newmodel = $_POST['model'];
 $tabId = $_POST['tabId'];

 $updateQuery = "UPDATE tablet SET
tabName = '$newtab_name',
model = '$newmodel',
price = '$newprice'
WHERE tabId = '$tabId'";
 if (mysqli_query($databaseConnection, $updateQuery)) {
 echo "<script>alert('Tablet updated successfully.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 } else {
 echo "Error updating product: " . mysqli_error($databaseConnection);
 }
 } else {

 echo "<script>alert('this type of not found.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 }
mysqli_close($databaseConnection);
?>
