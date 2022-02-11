<?php
require_once "./lib/Auth.php";
?>
<div class="menu-items">
  <i class="fas fa-bars bar"></i>
  <i class="fas fa-minus-circle remove"></i>
</div>
<div class="nav-bar">
  <div class="logo">
    <a href="index.php"><img src="img/logo.png" alt=""></a>
  </div>
  <div class="nav-items">
    <ul>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./AboutUs .php">About us</a></li>
      <li><a href="./Products.php">Products</a></li>
      <li><a href="./ContactUs.php">Contact us</a></li>
      <li><a href="./Whoarewe.php">Who are we?</a></li>

      <?php if (Auth::isLoggedIn()) : ?>
        <a href="logout.php"> Log Out </a>
      <?php else : ?>
        <a href="index.php"> Log In </a>
      <?php endif; ?>


      <?php if (Auth::isAdmin()) : ?>
        <a href="dashboard.php"> Dashboard </a>
      <?php endif; ?>
    </ul>
  </div>
</div>