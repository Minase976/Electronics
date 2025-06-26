<?php
session_start();
include '../connection.php';
if(isset($_SESSION["email"])){
if ($_SERVER["REQUEST_METHOD"] == "GET"){
 $tabId = $_GET['tabId'];
 $productquery = mysqli_query($databaseConnection,"SELECT * FROM tablet WHERE tabId = '$tabId'");
 $product = mysqli_fetch_assoc($productquery);
 $tabName = $product['tabName'];
 $model = $product['model'];
 $price = $product['price'];
 $email = $_SESSION["email"];
 

 $customerquery = mysqli_query($databaseConnection,"SELECT * FROM customer WHERE email = '$email'");
 $customer = mysqli_fetch_assoc($customerquery);
 $customerName = $customer["firstName"];

 $InsertQuery = "INSERT INTO orders(customerName,productName,model,price)
 VALUES('$customerName','$tabName','$model','$price')";


 if (mysqli_query($databaseConnection, $InsertQuery)) {
 echo "<script>alert('Your Tablet has Ordered successfully.')</script>";
 echo "<script>window.location.href = '../moreTablet.php';</script>";
 exit();
 }
  else {
 echo "Error Ordering a tablet: " . mysqli_error($databaseConnection);
 }
}
 else {

 echo "<script>alert('tablet not found.')</script>";
 echo "<script>window.location.href = '../moreTablet.php';</script>";
 exit();
 }
}else{
    echo "<script>alert('You do not Have an account.')</script>";
    echo "<script>window.location.href = '../moreTablet.php';</script>";
    exit();

}
 
mysqli_close($databaseConnection);
?>