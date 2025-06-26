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
    
 <h1>Add  New Laptop</h1>
 <form action="addLaptop.php" method="POST">

 <label >Laptop Name:</label>
 <input type="text" name="pcName" required>

 <label >Model:</label>
 <input type="text" name="model" required>

 <label >Price:</label>
 <input type="number" id="price" name="price" required>
 <button type="submit">Add Product</button>
 </form>
</body>
</html>
<?php
include '../connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $pcName = $_POST["pcName"];
 $model = $_POST["model"];
 $price = $_POST["price"];

 $query = "INSERT INTO laptop (pcName,model,price)
VALUES ('$pcName','$model','$price')";

 if (mysqli_query($databaseConnection, $query)) {
 echo "<script>alert('". $pcName ." added successfully.')</script>";
 echo "<script>window.location.href = '../items/laptop.php';</script>";
 exit();
 } else {
 echo "Error adding new laptop: " . mysqli_error($databaseConnection);
 }
}
mysqli_close($databaseConnection);
?>