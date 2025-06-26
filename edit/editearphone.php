<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>

 <center><h1>Edit Your Earphone</h1></center>
 <?php
 include '../connection.php';
 if (isset($_GET['earId'])) {
 $earId = $_GET['earId'];

 $query = "SELECT * FROM earphone WHERE earId = '$earId'";
 $result = mysqli_query($databaseConnection, $query);
 $row = mysqli_fetch_assoc($result);

 if ($row) {
 $earName = $row['earName'];
 $model = $row['model'];
 $price = $row['price'];
 }else{
 echo "<script>alert('No Product Found.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 }
 }
 ?>

 <form action="../update/updateEarphone.php" method="POST">
 <label >Earphone Name:</label>
 <input type="text"  name="earName"
value="<?php echo $earName; ?>"
 required>

 <label >Model:</label>
 <input type="text"  name="model"
value="<?php echo $model; ?>"
 required>

 <label >Price:</label>
 <input type="number" name="price"
value="<?php echo $price; ?>" required>
 <input type="hidden" name="earId"
value="<?php echo $earId;?>"
 >

 <button type="submit">Update Earphone</button>
 </form>
</body>