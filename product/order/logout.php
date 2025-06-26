<?php
session_start();
unset($_SESSION['email']);
echo "<script>alert('you have logged out.')</script>";
echo "<script>window.location.href = '../index.html';</script>";

?>