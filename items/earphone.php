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
 <form action="../search/searchEarphone.php" method="POST">
 <label>Search Your Earphone:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>
 </form>
 <a class="href" href="../addition/addEarphone.php">Add New Earphone</a>
 <script>
function confirmDelete(earId) {
 if (confirm("Are you sure you want to delete this laptop?")) {
 window.location.href = "../delete/deleteEarphone.php?earId=" + earId;
 }
}
</script>

 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM earphone';
 $result = mysqli_query($databaseConnection, $sqlQuery);
 if($result){
 if(mysqli_num_rows($result) > 0){


 echo "<table>";
 echo "<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Model</th>
 <th>Price</th>
 <th>Edit </th>
 <th>Delete</th>
  </tr>";

 while($row = mysqli_fetch_assoc($result)){

 $earId = $row['earId'];
 $earName = $row['earName'];
 $model = $row['model'];
 $price = $row['price'];
 
 echo "<tr>";
 echo "<td>" . $earId . "</td>";
 echo "<td>" . $earName . "</td>";
 echo "<td>" . $model. "</td>";
 echo "<td>" . $price . "</td>";
 echo "<td><a class='edit' href='../edit/editearphone.php?earId=$earId'>Edit</a></td>";
 echo "<td><button class='log' onclick='confirmDelete($earId);'>Delete</button></td>";
 echo "</tr>";
 }
 
 echo "</table>";
 }else{
 echo "there is no such kind of Earphone";
 }
 }else{
 echo "Error executing the query ". mysqli_error($databaseConnection);
 }
 mysqli_close($databaseConnection);
 ?>