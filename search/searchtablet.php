<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Search Results</title>
 <link rel="stylesheet" href="../style.css">
</head>
<body>

 <a class="href" href="../items/tablet.php">See all products</a>
</body>
</html>


<?php
include '../connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $searchQuery = $_POST["electro"];

 $query = "SELECT * FROM tablet WHERE   tabName LIKE '%$searchQuery%'";

 $result = mysqli_query($databaseConnection, $query);

 if ($result && mysqli_num_rows($result) > 0) {
 echo "<h2>Search Results:</h2>";
 echo "<table>";
 echo "<tr><th>ID</th><th>Name</th><th>Model</th><th>Price</th></tr>";

 while ($row = mysqli_fetch_assoc($result)) {

    $tabId = $row['tabId'];
    $model = $row["model"];
    $tabName = $row['tabName'];
    $price = $row['price'];

    echo "<tr>";
    echo "<td>" . $tabId . "</td>";
    echo "<td>" . $tabName . "</td>";
    echo "<td>" . $model. "</td>";
    echo "<td>" . $price . "</td>";
    echo "</tr>";
 }
 echo "</table>";
 } else {
 echo "<h2>No matching products found.<h2>";
 }
}
mysqli_close($databaseConnection);
?>