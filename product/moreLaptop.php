<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> </title>
 <link rel="stylesheet" href="style.css">
 <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

 <style>
   .bd-placeholder-img {
     font-size: 1.125rem;
     text-anchor: middle;
     -webkit-user-select: none;
     -moz-user-select: none;
     user-select: none;
   }
 
   @media (min-width: 768px) {
     .bd-placeholder-img-lg {
       font-size: 3.5rem;
     }
   }
 </style>
 
 
 <!-- Custom styles for this template -->
 <link href="product.css" rel="stylesheet">
</head>
<body>
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
  <button class="log" ><a href="../addCustomer.php">LOGIN</a></button>
    <a class="py-2 d-none d-md-inline-block" href="index.html">HOME</a>
    <a class="py-2 d-none d-md-inline-block" href="disPhone.html">PHONES</a>
    <a class="py-2 d-none d-md-inline-block" href="disLaptop.html">LAPTOPS</a>
    <a class="py-2 d-none d-md-inline-block" href="disTablet.html">TABLETS</a>
    <a class="py-2 d-none d-md-inline-block" href="disHeadset.html">HEADSET</a>
    <button class="log"><a href="order/logout.php">LOGOUT</a></button>

  </nav>
</header>
 <form action="search/searchlaptop.php" method="POST">
 <label>Search Product:</label>
 <input type="text" name="electro">
 <button type="submit">Search</button>

 </form>



 </body>
</html>

<?php
include "../connection.php";

$sqlQuery = 'SELECT * FROM laptop';
 $result = mysqli_query($databaseConnection, $sqlQuery);
 if($result){
 if(mysqli_num_rows($result) > 0){


 echo "<table>";
 echo "<tr>
 <th>ID</th>
 <th>Name</th>
 <th>Model</th>
 <th>Price</th>
 <th>Order</th>


  </tr>";

 while($row = mysqli_fetch_assoc($result)){

 $pcId = $row['pcId'];
 $pcName = $row['pcName'];
 $model = $row['model'];
 $price = $row['price'];
 
 echo "<tr>";
 echo "<td>" . $pcId . "</td>";
 echo "<td>" . $pcName . "</td>";
 echo "<td>" . $model. "</td>";
 echo "<td>" . $price . "</td>";
 echo "<td>"."<button class='log'><a  href='order/orderLaptop.php?pcId=$pcId' >Order</a></button></td>";
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