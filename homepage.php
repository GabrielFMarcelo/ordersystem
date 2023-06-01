<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resource/css/homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Texas Steakhouse</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header class="">
      <nav class="navbar navbar-expand-lg text-light navbar-dark fixed-top box-shadow py-3">
        <img class="logo img-fluid mr-2" src="https://cdn.pixabay.com/photo/2012/04/30/10/39/cow-44720_1280.png" alt="">
        <a class="navbar-brand" href="homepage.php">texas steakhouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active navitem" href="#home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link active navitem" href="#carous">About Us </a>
            <a class="nav-link active navitem" href="#menu">Main Menu</a>
            <a class="nav-link active navitem" href="#contact">Contact Us</a>
          </div>
            <div class="ml-auto">
            <a class="nav-link active btn bg-success btn-success d-inline" href="login.php"><i class="fa fa-sign-in mr-1"></i>Login</a>
            <a class="nav-link active btn bg-success btn-success d-inline" href="register.php"><i class="fa fa-registered mr-1"></i>Sign Up</a>
          </div>
        </div>
      </nav>
    </header>

    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5 class="head text-light text-uppercase pb-1">Texas Steakhouse</h5>
            <h1 class="heads text-success text-uppercase mb-0 pb-0">Savor the Legendary</h1>
            <h1 class="heads text-success text-uppercase pb-1">Flavors of Texas</h1>
            <p class="par text-light">Where flavor meets tradition, serving premium cuts of steak in an inviting atmosphere.</p>
            <a class="btn btn-outline-danger bg-danger text-light text-uppercase text-decoration-none btn-book" href="#menu">Book a Table</a>
          </div>
        </div>
      </div>
    </section>

    <section class="about pt-5" id="about">
      <div class="container reveal fade-bottom">
        <p class="text-uppercase mt-3 text-center subtitle text-light pb-0">Experience the ultimate dining experience</p>
        <h1 class="tag text-light text-center ">Where Steak Dreams Come True</h1>
        <p class="tags mx-auto text-light mb-0">Immerse yourself in a culinary journey of delectable flavors and exceptional service at our Texas Steakhouse, where every bite is a celebration of the finest cuts of steak. Indulge in the perfect blend of Texas hospitality and savory delights, creating a dining experience that will leave you craving for more.</p>
      </div>
    </section>


    <section class="carous" id="carous">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="resource/img/5.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resource/img/6.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resource/img/7.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resource/img/8.png" alt="Fourth slide">
          </div>
        </div>
      </div>
    </section>

    <section class="menu" id="menu">
      <div class="album py-5 reveal fade-bottom">
        <p class="text-uppercase text-center subtitles fnt">Discover</p>
        <h1 class="text-uppercase text-center pb-3 fnt">Main Menu</h1>
      <div class="container reveal fade-bottom">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow bg-white rounded card-block">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/11/21/15/52/french-fries-1846083_1280.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Appetizer</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-dark"><a class="text-success text-decoration-none" target="_blank" href="login.php">View</a></button>
                  </div>
                  <small class="text-muted">Menu</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow bg-white rounded card-block">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/02/08/15/01/meat-3139640_1280.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Steak & Ribs</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-dark"><a class="text-success text-decoration-none" target="_blank" href="login.php">View</a></button>
                  </div>
                  <small class="text-muted">Menu</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow bg-white rounded card-block">
              <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/03/16/23/24/salad-2150548_1280.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Salad & Sides</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-dark"><a class="text-success text-decoration-none" target="_blank" href="login.php">View</a></button>
                  </div>
                  <small class="text-muted">Menu</small>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="contact" id="contact">
    </section>

    <footer id="sticky-footer" class="py-4 text-white-50">
      <div class="container text-center">
          <div class="row">
              <div class="col col-sm-5 text-left">
                  <small>Copyright Group 3 BSIT1-A 2022-2023</small>
              </div>
              <div class="col text-right">
                  <small>Created by: Gabriel Marcelo, Heidel Berg Valerio, Jairo Garcia, Bea Patrice Cortez, Diane Hipolito</small>
              </div>
          </div>
      </div>
    </footer>

    <script src="resource/js/anima.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
