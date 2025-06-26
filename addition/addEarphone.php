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
   
 <h1>Add  New Earphone</h1>
 <form action="addEarphone.php" method="POST">

 <label >Earphone Name:</label>
 <input type="text" name="earName" required>

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
 $earName = $_POST["earName"];
 $model = $_POST["model"];
 $price = $_POST["price"];

 $query = "INSERT INTO earphone (earName,model,price)
VALUES ('$earName','$model','$price')";

 if (mysqli_query($databaseConnection, $query)) {
 echo "<script>alert('". $earName ." added successfully.')</script>";
 echo "<script>window.location.href = '../items/earphone.php';</script>";
 exit();
 } else {
 echo "Error adding new Earphone: " . mysqli_error($databaseConnection);
 }
}
mysqli_close($databaseConnection);
?>