<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
 <center><h1>Edit Your Laptop</h1></center>
 <?php
 include '../connection.php';
 if (isset($_GET['pcId'])) {
 $pcId = $_GET['pcId'];

 $query = "SELECT * FROM laptop WHERE pcId = '$pcId'";
 $result = mysqli_query($databaseConnection, $query);
 $row = mysqli_fetch_assoc($result);

 if ($row) {
 $pcName = $row['pcName'];
 $model = $row['model'];
 $price = $row['price'];
 }else{
 echo "<script>alert('No Product Found.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 }
 }
 ?>

 <form action="../update/updateLaptop.php" method="POST">
 <label >Laptop Name:</label>
 <input type="text"  name="pcName"
value="<?php echo $pcName; ?>"
 required>

 <label >Model:</label>
 <input type="text"  name="model"
value="<?php echo $model; ?>"
 required>
 
 <label >Price:</label>
 <input type="number" name="price"
value="<?php echo $price; ?>" required>


 <input type="hidden" name="pcId"
value="<?php echo $pcId;?>"
 >

 <button type="submit">Update laptop</button>
 </form>
</body>