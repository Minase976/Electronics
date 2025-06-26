<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> </title>
 <link rel="stylesheet" href="../product/product.css">
 <link rel="stylesheet" href="../style.css">
 <link rel="stylesheet" href="navigation.css">
</head>
<body>


    <?php include "navigation.php"; ?>
 <form action="../search/searchPhone.php" method="POST">
 <label>Search Your Phone:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>
 </form>
 <a class="href" href="../addition/addPhone.php">Add New Phone</a>
 <script>
function confirmDelete(phoneId) {
 if (confirm("Are you sure you want to delete this phone?")) {
 window.location.href = "../delete/deletePhone.php?phoneId=" + phoneId;
 }
}
</script>

 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM phone';
 $result = mysqli_query($databaseConnection, $sqlQuery);
 if($result){
 if(mysqli_num_rows($result) > 0){


 echo "<table>";
 echo "<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Model</th>
 <th>Price</th>
 <th>Edit</th>
 <th>Delete</th>

  </tr>";

 while($row = mysqli_fetch_assoc($result)){

 $phoneId = $row['phoneId'];
 $phone_name = $row['phone_name'];
 $model = $row['model'];
 $price = $row['price'];
 
 echo "<tr>";
 echo "<td>" . $phoneId . "</td>";
 echo "<td>" . $phone_name . "</td>";
 echo "<td>" . $model. "</td>";
 echo "<td>" . $price . "</td>";
 echo "<td><a  class='edit' href='../edit/editphone.php?phoneId=$phoneId' >Edit</a></td>";
 echo "<td><button class='log' onclick='confirmDelete($phoneId);'>Delete</button></td>";
 echo "</tr>";
 }
 
 echo "</table>";
 }else{
 echo "No Products Found";
 }
 }else{
 echo "Error executing the query ". mysqli_error($databaseConnection);
 }
 mysqli_close($databaseConnection);
 ?>