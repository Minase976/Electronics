<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Add new phone</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="product/product.css">
 <link rel="stylesheet" href="sign-in.css">
 <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
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

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      body{
        animation: to-the-roof 1s ;
        animation-fill-mode:ease-in;
      }
      @keyframes to-the-roof{
    from{transform: translatey(-100%);}
}
      
    </style>

</head>
<body class="to-the-roof">
  <header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="product/index.html">HOME</a>
    <a class="py-2 d-none d-md-inline-block" href="product/disPhone.html">PHONES</a>
    <a class="py-2 d-none d-md-inline-block" href="product/disLaptop.html">LAPTOPS</a>
    <a class="py-2 d-none d-md-inline-block" href="product/disTablet.html">TABLETS</a>
    <a class="py-2 d-none d-md-inline-block" href="product/disHeadset.html">HEADSET</a>

  </nav>
</header>

   
    <main class="form-signin w-100 m-auto">
  <form action="addCustomer.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="firstName" required>
      <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="lastName" required>
      <label for="floatingPassword">Last Name</label>
    </div>
    <div class="form-floating">
      <input type="telephone" class="form-control" id="floatingPassword" placeholder="Password" name="phone" required>
      <label for="floatingPassword">Phone</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingPassword" placeholder="Password" name="email" required>
      <label for="floatingPassword">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass_word" minlength="8" maxlength="10"required>
      <label for="floatingPassword">Password</label>
    </div>
 
    <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
  </form>
</main>

 </form>
</body>
</html> -
<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $firstName = $_POST["firstName"];
 $lastName = $_POST["lastName"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $pass_word = $_POST["pass_word"];
 

$select = "SELECT * FROM customer WHERE email = '$email' && pass_word = '$pass_word'  ";
$runquery = mysqli_query($databaseConnection, $select);
if($runquery){
  $_SESSION["email"] = $email;
 $query = "INSERT INTO customer (firstName,lastName,phone,email,pass_word)
VALUES ('$firstName','$lastName','$phone','$email','$pass_word')";
$run=mysqli_query($databaseConnection, $query);
 if ($run) {
 echo "<script>alert(' signed successfully.')</script>";
 echo "<script>window.location.href = 'product/index.html';</script>";
 exit();
 } else {
 echo "Error : " . mysqli_error($databaseConnection);
 }
}
else{
  echo "<script>alert(' you are already rgistered.')</script>";
  echo "<script>window.location.href = 'product/index.html';</script>";
  exit();
}

}


?>