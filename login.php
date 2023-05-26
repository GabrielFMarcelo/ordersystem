<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login or Sign Up</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">
</head>
<body>
  <header class="">
    <nav class="navbar navbar-expand-lg text-light navbar-dark fixed-top box-shadow py-3">
      <img class="logo img-fluid mr-2" src="https://cdn.pixabay.com/photo/2012/04/30/10/39/cow-44720_1280.png" alt="">
      <a class="navbar-brand -5" href="#">texas steakhouse</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="ml-auto">
        <a class="nav-link active btn bg-success btn-success d-inline" href="login.php">Login</a>
        <a class="nav-link active btn bg-success btn-success d-inline" href="register.php">Sign Up</a>
      </div>
      </div>
    </nav>
  </header>
           <div class="container-fluid mt-5 login">
            <div class="row justify-content-center">
                <div class="col-md-4">
                  <div class="jumbotron py-2 shadow bg-light border border-light rounded pt-5 mt-5 pb-4 puff-in-center">
                    <p class="h4">Welcome!</p>
                    <h5 class="text-muted m1 mb-4">Sign up or log in to continue</h5>
                    <form class="" action="" method="post" >
                    <?php logd();?>
                    <input type="text" id="username" class="form-control mb-2" name="username" placeholder="Enter Username" required>
                    <input type="password" id="defaultLoginFormPassword" class="form-control" placeholder="Enter Password" name ="password" required>
                    <div class="d-flex justify-content-around">
                    </div>
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit"  class="btn btn-success btn-block my-4"value="Login"/>
                    </form>
                    <h6 class="text-center text-muted mt-2 or">or</h6>
                    <button href="" class="btn btn-block btn-primary">Continue with Facebook<i class="fa fa-facebook-f float-left pt-1"></i></button>
                    <button href="" class="btn btn-block btn-light border border-dark">Continue with Google<i class="fa fa-google float-left pt-1"></i></button>
                    <button href="" class="btn btn-block appbt text-light">Continue with Apple<i class="fa fa-apple float-left pt-1"></i></button>
                    <button href="" class="btn btn-block bg-info text-light">Register<i class="fa fa-edge float-left pt-1"></i></button>
                  </div>
                </div>

        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
