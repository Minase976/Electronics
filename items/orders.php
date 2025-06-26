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
 <form action="../search/searchOrder.php" method="POST">
 <label>Search Your Orders By Product Name:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>
 </form>
 <script>

function confirmDelete(orderId) {
 if (confirm("Are you sure you want to delete this Order?")) {
 window.location.href = "../delete/deleteOrder.php?orderId=" + orderId;
 }
}
</script>

 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM orders';
 $result = mysqli_query($databaseConnection, $sqlQuery);
 if($result){
 if(mysqli_num_rows($result) > 0){


 echo "<table>";
 echo "<tr>
 <th>ID</th>
 <th> Customer ID</th>
 <th> Customer Name</th>
 <th>Product Name</th>
 <th>Model</th>
 <th>Price</th>
 <th>Delete</th>
  </tr>";

 while($row = mysqli_fetch_assoc($result)){
 $orderId  = $row["orderId"];
 $customerId = $row['customerId'];
 $customerName = $row['customerName'];
 $productName = $row['productName'];
 $model= $row['model'];
 $price = $row["price"];
 
 echo "<tr>";
 echo "<td>" . $orderId."</td>";
 echo "<td>" . $customerId."</td>";
 echo "<td>" . $customerName."</td>";
 echo "<td>" . $productName."</td>";
 echo "<td>" . $model."</td>";
 echo "<td>" . $price. "</td>";
 echo "<td>
 <button class='log' onclick='confirmDelete($orderId);'>Delete</button>
 </td>";
 echo "</tr>";
 }
 
 echo "</table>";
 }else{
 echo "There is no Oreder";
 }
 }else{
 echo "Error executing the query ". mysqli_error($databaseConnection);
 }
 mysqli_close($databaseConnection);
 ?>