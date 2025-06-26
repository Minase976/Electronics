<?php
session_start();
include '../connection.php';
if(isset($_SESSION["email"])){
if ($_SERVER["REQUEST_METHOD"] == "GET"){
 $phoneId = $_GET['phoneId'];
 $productquery = mysqli_query($databaseConnection,"SELECT * FROM phone WHERE phoneId = '$phoneId'");
 $product = mysqli_fetch_assoc($productquery);
 $phone_name = $product['phone_name'];
 $model = $product['model'];
 $price = $product['price'];
 $email = $_SESSION["email"];
 

 $customerquery = mysqli_query($databaseConnection,"SELECT * FROM customer WHERE email = '$email'");
 $customer = mysqli_fetch_assoc($customerquery);
 $customerName = $customer["firstName"];
 $customerId = $customer["customerId"];

 $InsertQuery = "INSERT INTO orders(customerId,customerName,productName,model,price)
 VALUES('$customerId','$customerName','$phone_name','$model','$price')";


 if (mysqli_query($databaseConnection, $InsertQuery)) {
 echo "<script>alert('the phone has Ordered successfully.')</script>";
 echo "<script>window.location.href = '../morePhone.php';</script>";
 exit();
 }
  else {
 echo "Error Ordering a phone: " . mysqli_error($databaseConnection);
 }
}
 else {

 echo "<script>alert('Phone not found.')</script>";
 echo "<script>window.location.href = '../morePhone.php';</script>";
 exit();
 }
}else{
    echo "<script>alert('You do not Have an account.')</script>";
    echo "<script>window.location.href = '../morePhone.php';</script>";
    exit();

}
 
mysqli_close($databaseConnection);
?>