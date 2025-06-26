<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Search Results</title>
 <link rel="stylesheet" href="../style.css">
</head>
<body>

 <a class="href" href="../items/customers.php">See all Customers</a>
</body>
</html>


<?php
include '../connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $searchQuery = $_POST["electro"];

 $query = "SELECT * FROM customer WHERE   firstName LIKE '%$searchQuery%'";

 $result = mysqli_query($databaseConnection, $query);

 if ($result && mysqli_num_rows($result) > 0) {
 echo "<h2>Search Results:</h2>";
 echo "<table>";
 echo "<tr><th>ID</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Phone</th>
 <th>Email</th>
 <th>Password</th>
 </tr>";

 while ($row = mysqli_fetch_assoc($result)) {

    $ID= $row['customerId'];
    $Fname = $row["firstName"];
    $Lname = $row['lastName'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['pass_word'];

    echo "<tr>";
    echo "<td>" . $ID . "</td>";
    echo "<td>" . $Fname . "</td>";
    echo "<td>" . $Lname . "</td>";
    echo "<td>" . $phone. "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $password . "</td>";
    echo "</tr>";
 }
 echo "</table>";
 } else {
 echo "<h2>No matching customer found.<h2>";
 }
}
mysqli_close($databaseConnection);
?>