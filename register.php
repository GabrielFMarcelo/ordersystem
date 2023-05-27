<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';
$view = new view;
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/register.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
         <div class="ml-auto">
         <a class="nav-link active btn bg-success btn-success d-inline" href="login.php"><i class="fa fa-sign-in mr-1"></i>Login</a>
         <a class="nav-link active btn bg-success btn-success d-inline" href="register.php"><i class="fa fa-registered mr-1"></i>Sign Up</a>
       </div>
       </div>
     </nav>
   </header>
            <div class="container-fluid mt-5 pt-5 registers">
              <div class="row">
                <div class="col-md-5 mx-auto">
                  <div class="jumbotron bg-light border border-light shadow puff-in-center rounded">
                    <?php
                    vald();
                    ?>
                  <h4 class="pt-0 mt-0">Register New Account</h4>
                  <h6 class="text-muted m1 mb-4">We'll check first if you have an existing account</h6>
                  <div class="form-group mx-auto">
                    <label for = "email" class=""> Email Address</label>
                    <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                  </div>
                  <h6 class="text-muted m1 mb-4">If none, fill in the needed information</h6>
                <form action="" method="post" class="mx-auto ">
                  <div class=" mx-auto">
                    <div class="form-group mx-auto">
                      <label for = "username" class=""> Username:</label>
                      <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                    </div>
                    <div class="form-group mx-auto">
                      <label for = "password"> Password:</label>
                      <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                    </div>
                    <div class="form-group mx-auto">
                      <label for = "ConfirmPassword"> Confirm Password:</label>
                      <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                    </div>
                    <div class="form-group mx-auto">
                      <label for = "fullName" class=""> Full Name</label>
                      <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                    </div>
                    <div class="form-group mx-auto text-dark">
                      <label for="College" class="text-dark">College/s to handle</label>
                      <select id="College" name="College[]" class="border border-secondary selectpicker form-control" data-live-search="true" multiple required>
                        <?php $view->collegeSP2();?>
                      </select>
                    </div>
                  </div>
                  <div class=" justify-content-center mx-auto text-center">
                    <div class="form-group mx-auto">
                      <label >&nbsp;</label>
                      <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                      <input type="submit" value="Register New Account" class=" form-control btn btn-success" />
                    </div>
                  </div>
                  <h6 class="text-muted terms">By signing up, you agree to our <strong>Terms and Conditions</strong> and <strong>Privacy Policy</strong>.</h6>
          </form>
        </div>
      </div>
    </div>
    </div>

     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
