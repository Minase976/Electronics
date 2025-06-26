<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Add new phone</title>
 <link rel="stylesheet" href="../style.css">
 <link rel="stylesheet" href="../items/navigation.css">
</head>
<body>
 <h1>Add  New Tablet</h1>
 <form action="addTablet.php" method="POST">

 <label >Tablet Name:</label>
 <input type="text" name="tabName" required>

 <label >Model:</label>
 <input type="text" name="model" required>

 <label >Price:</label>
 <input type="number" id="price" name="price" required>
 <button type="submit">Add Product</button>
 </form>_
</body>
</html>
<?php
include '../connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $tabName = $_POST["tabName"];
 $model = $_POST["model"];
 $price = $_POST["price"];

 $query = "INSERT INTO tablet (tabName,model,price)
VALUES ('$tabName','$model','$price')";

 if (mysqli_query($databaseConnection, $query)) {
 echo "<script>alert('". $tabName ." added successfully.')</script>";
 echo "<script>window.location.href = '../items/tablet.php';</script>";
 exit();
 } else {
 echo "Error adding new Tablet: " . mysqli_error($databaseConnection);
 }
}
mysqli_close($databaseConnection);
?>