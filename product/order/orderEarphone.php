<?php
session_start();
include '../connection.php';
if(isset($_SESSION["email"])){
if ($_SERVER["REQUEST_METHOD"] == "GET"){
 $earId = $_GET['earId'];
 $productquery = mysqli_query($databaseConnection,"SELECT * FROM earphone WHERE earId = '$earId'");
 $product = mysqli_fetch_assoc($productquery);
 $earName = $product['earName'];
 $model = $product['model'];
 $price = $product['price'];
 $email = $_SESSION["email"];
 

 $customerquery = mysqli_query($databaseConnection,"SELECT * FROM customer WHERE email = '$email'");
 $customer = mysqli_fetch_assoc($customerquery);
 $customerName = $customer["firstName"];

 $InsertQuery = "INSERT INTO orders(customerName,productName,model,price)
 VALUES('$customerName','$earName','$model','$price')";


 if (mysqli_query($databaseConnection, $InsertQuery)) {
 echo "<script>alert('Your Earphone has Ordered successfully.')</script>";
 echo "<script>window.location.href = '../moreHeadset.php';</script>";
 exit();
 }
  else {
 echo "Error Ordering a earphone: " . mysqli_error($databaseConnection);
 }
}
 else {

 echo "<script>alert('Earphone not found.')</script>";
 echo "<script>window.location.href = '../moreHeadset.php';</script>";
 exit();
 }
}else{
    echo "<script>alert('You do not Have an account.')</script>";
    echo "<script>window.location.href = '../moreHeadset.php';</script>";
    exit();

}
 
mysqli_close($databaseConnection);
?>