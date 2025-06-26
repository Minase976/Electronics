<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
 <center><h1>Edit Your Phone</h1></center>
 <?php
 include '../connection.php';
 if (isset($_GET['phoneId'])) {
 $phoneId = $_GET['phoneId'];

 $query = "SELECT * FROM phone WHERE phoneId = '$phoneId'";
 $result = mysqli_query($databaseConnection, $query);
 $row = mysqli_fetch_assoc($result);

 if ($row) {
 $phone_name = $row['phone_name'];
 $model = $row['model'];
 $price = $row['price'];
 }else{
 echo "<script>alert('No Product Found.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 }
 }
 ?>

 <form action="../update/updatephone.php" method="POST">
 <label >Phone Name:</label>
 <input type="text"  name="phone_name"
value="<?php echo $phone_name; ?>"
 required>

 <label >Model:</label>
 <input type="text"  name="model"
value="<?php echo $model; ?>"
 required>

 <label >Price:</label>
 <input type="number" name="price"
value="<?php echo $price; ?>" required>
 <input type="hidden" name="phoneId"
value="<?php echo $phoneId;?>"
 >

 <button type="submit">Update Phone</button>
 </form>
</body>