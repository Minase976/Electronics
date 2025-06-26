<?php
session_start();
include '../connection.php';
if(isset($_SESSION["email"])){
if ($_SERVER["REQUEST_METHOD"] == "GET"){
 $pcId = $_GET['pcId'];
 $productquery = mysqli_query($databaseConnection,"SELECT * FROM laptop WHERE pcId = '$pcId'");
 $product = mysqli_fetch_assoc($productquery);
 $pcName = $product['pcName'];
 $model = $product['model'];
 $price = $product['price'];
 $email = $_SESSION["email"];
 

 $customerquery = mysqli_query($databaseConnection,"SELECT * FROM customer WHERE email = '$email'");
 $customer = mysqli_fetch_assoc($customerquery);
 $customerName = $customer["firstName"];
 $customerId = $customer["customerId"];

 $InsertQuery = "INSERT INTO orders(customerName,productName,model,price)
 VALUES('$customerName','$pcName','$model','$price')";


 if (mysqli_query($databaseConnection, $InsertQuery)) {
 echo "<script>alert('the Laptop has Ordered successfully.')</script>";
 echo "<script>window.location.href = '../moreLaptop.php';</script>";
 exit();
 }
  else {
 echo "Error Ordering a Laptop: " . mysqli_error($databaseConnection);
 }
}
 else {

 echo "<script>alert('Laptop not found.')</script>";
 echo "<script>window.location.href = '../moreLaptop.php';</script>";
 exit();
 }
}else{
    echo "<script>alert('You do not Have an account.')</script>";
    echo "<script>window.location.href = '../moreLaptop.php';</script>";
    exit();

}
 
mysqli_close($databaseConnection);
?>