<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';
require_once 'resource/php/class/config.php';
?>

<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resource/css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Shopping Cart</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header class="">
      <nav class="navbar navbar-expand-lg text-light navbar-dark fixed-top box-shadow py-3">
        <img class="logo img-fluid mr-2" src="https://cdn.pixabay.com/photo/2012/04/30/10/39/cow-44720_1280.png" alt="">
        <a class="navbar-brand -5" href="homepage.php">texas steakhouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link navitem active" href="template.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link active navitem" href="appetizer.php">Appetizer</a>
            <a class="nav-link active navitem" href="steak.php">Steak & Ribs</a>
            <a class="nav-link active navitem" href="salad.php">Salad & Sides</a>
          </div>
          <div class="ml-auto">
            <a class="text-decoration-none text-success" href="cart.php"><i class="fa fa-shopping-cart cart text-success ml-3 mr-2 mt-2 text-decoration-none" style="font-size: 25px;"></i>Cart</a>
          </div>
        </div>
      </nav>
    </header>

    <?php
     $view = new view();
     $view->showFood();
    ?>

    <?php
      insertSalads();
     ?>

     <?php
     insertSteaks();
     ?>

     <?php
     insertAppetizers();
      ?>

<div class="container card w-75 mt-3 border border-dark">

  <h1 class="text-center mt-5 border border-dark bg-light text-dark rounded text-uppercase">Total Price: ₱
    <?php
    $view = new view();
    $view->totalPrice();
    ?>
  </h1>
      <h4 class="text-center text-uppercase mt-3">Mode of payment</h4>
      <h6 class="text-center text-muted font-weight-normal text-uppercase mb-3">Choose the payment method that suits you</h6>

          <!-- Form Checkout button -->
          <form class="btn-checkout d-flex flex-column mb-2" action="checkout.php" method="post">
            <input class="btn w-25 btn-block btn-danger mx-auto text-light" name="checkout" style="font-size: .875rem;" type="submit" value="Checkout">
          </form>

          <a href="https://www.facebook.com" class="btn btn-block w-25 mx-auto btn-warning">VISA CC<i class="fa fa fa-cc-visa float-left pt-1"></i></a>
          <a href="https://www.facebook.com" class="btn btn-block w-25 mx-auto btn-dark">American Express CC<i class="fa fa fa-cc-amex float-left pt-1"></i></a>
          <a class="btn btn-primary btn-block w-25 mx-auto"href="#">GCash</a>
          <a class="btn btn-success btn-block w-25 mx-auto mb-4"href="#">PayMaya</a>
        </div>
      </div>


    <?php
    deleteT();
     ?>


     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
