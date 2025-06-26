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
 <form action="../search/searchCustomer.php" method="POST">
 <label>Search Your Customers:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>
 </form>
 <script>

function confirmDelete(customerId) {
 if (confirm("Are you sure you want to delete this Customer?")) {
 window.location.href = "../delete/deleteCustomer.php?customerId=" + customerId;
 }
}
</script>

 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM customer';
 $result = mysqli_query($databaseConnection, $sqlQuery);
 if($result){
 if(mysqli_num_rows($result) > 0){


 echo "<table>";
 echo "<tr>
 <th>ID</th>
 <th> First Name</th>
 <th>Last Name</th>
 <th>Phone</th>
 <th>Email</th>
 <th>Password</th>
 <th>Delete</th>

  </tr>";

 while($row = mysqli_fetch_assoc($result)){
 $customerId  = $row["customerId"];
 $firstName = $row['firstName'];
 $lastName = $row['lastName'];
 $phone= $row['phone'];
 $email = $row["email"];
 $password = $row["pass_word"];

 
 echo "<tr>";
 echo "<td>" . $customerId."</td>";
 echo "<td>" . $firstName."</td>";
 echo "<td>" . $lastName."</td>";
 echo "<td>" . $phone."</td>";
 echo "<td>" . $email. "</td>";
 echo "<td>" . $password. "</td>";
 echo "<td>
 <button class='log' onclick='confirmDelete($customerId);'>Delete</button>
 </td>";
 
 echo "</tr>";
 }
 
 echo "</table>";
 }else{
 echo "There is no Customer";
 }
 }else{
 echo "Error executing the query ". mysqli_error($databaseConnection);
 }
 mysqli_close($databaseConnection);
 ?>