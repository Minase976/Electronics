<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
 <center><h1>Edit Your Tablet</h1></center>
 <?php
 include '../connection.php';
 if (isset($_GET['tabId'])) {
 $tabId = $_GET['tabId'];

 $query = "SELECT * FROM tablet WHERE tabId = '$tabId'";
 $result = mysqli_query($databaseConnection, $query);
 $row = mysqli_fetch_assoc($result);

 if ($row) {
 $tabName = $row['tabName'];
 $model = $row['model'];
 $price = $row['price'];
 }else{
 echo "<script>alert('No Product Found.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 }
 }
 ?>

 <form action="../update/updateTablet.php" method="POST">
 <label >Tablet Name:</label>
 <input type="text"  name="tabName"
value="<?php echo $tabName; ?>"
 required>

 <label >Model:</label>
 <input type="text"  name="model"
value="<?php echo $model; ?>"
 required>

 <label >Price:</label>
 <input type="number" name="price"
value="<?php echo $price; ?>" required>
 <input type="hidden" name="tabId"
value="<?php echo $tabId;?>"
 >

 <button type="submit">Update Tablet</button>
 </form>
</body>