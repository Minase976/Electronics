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
   
 <h1>Add  New Phone</h1>
 <form action="addPhone.php" method="POST">

 <label >Phone Name:</label>
 <input type="text" name="phone_name" required>

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
 $phone_name = $_POST["phone_name"];
 $model = $_POST["model"];
 $price = $_POST["price"];

 $query = "INSERT INTO phone (phone_name,model,price)
VALUES ('$phone_name','$model','$price')";

 if (mysqli_query($databaseConnection, $query)) {
 echo "<script>alert('". $phone_name ." added successfully.')</script>";
 echo "<script>window.location.href = '../items/phone.php';</script>";
 exit();
 } else {
 echo "Error adding new phone: " . mysqli_error($databaseConnection);
 }
}
mysqli_close($databaseConnection);
?>