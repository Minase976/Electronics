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
 <form action="../search/searchTablet.php" method="POST">
 <label>Search Your Tablet:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>
 </form>
 <a class="href" href="../addition/addTablet.php">Add New Tablet</a>
 <script>
function confirmDelete(tabId) {
 if (confirm("Are you sure you want to delete this Tablet?")) {
 window.location.href = "../delete/deleteTablet.php?tabId=" + tabId;
 }
}
</script>

 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM tablet';
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
 <th>Delete </th>

  </tr>";

 while($row = mysqli_fetch_assoc($result)){

 $tabId = $row['tabId'];
 $tabName = $row['tabName'];
 $model = $row['model'];
 $price = $row['price'];
 
 echo "<tr>";
 echo "<td>" . $tabId . "</td>";
 echo "<td>" . $tabName . "</td>";
 echo "<td>" . $model. "</td>";
 echo "<td>" . $price . "</td>";
 echo "<td><a class='edit 'href='../edit/editTablet.php?tabId=$tabId'>Edit</a></td>";
 echo "<td><button class='log' onclick='confirmDelete($tabId);'>Delete</button></td>";
 echo "</tr>";
 }
 
 echo "</table>";
 }else{
 echo "there is no such kind of Tablet";
 }
 }else{
 echo "Error executing the query ". mysqli_error($databaseConnection);
 }
 mysqli_close($databaseConnection);
 ?>