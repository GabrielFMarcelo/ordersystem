<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resource/css/appetizer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Steak & Ribs</title>
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
            <a class="nav-link active navitem" href="logout.php">Log Out</a>
          </div>
          <div class="ml-auto">
            <a class="text-decoration-none text-success" href="cart.php"><i class="fa fa-shopping-cart cart text-success ml-3 mr-2 mt-2 text-decoration-none" style="font-size: 25px;"></i>Cart</a>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="container">
        <div class="pt-5 mt-5">
          <p class="text-uppercase text-center subtitles fnt">Discover</p>
          <h1 class="text-uppercase text-center pb-3 fnt">Steak & Ribs</h1>
        </div>
        <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-3"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2016/01/22/02/13/meat-1155132_1280.jpg"></div>
                <div class="col-md-6 mt-3">
                    <h5>Grilled Ribeye Steak</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- A succulent and juicy 12-ounce ribeye steak, expertly grilled to your preferred temperature, served with a side of garlic mashed potatoes and sautéed seasonal vegetables.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱1,500</h4><span class="strike-text">₱2,500</span>
                    </div>
                    <h6 class="text-success">Serving Time: 15 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button></div>

                    <!-- Form Add to Cart button -->
                    <form class="btn-cart d-flex flex-column mt-2" action="cart.php" method="post">
                      <input class="btn btn-outline-dark btn-sm" name="g-steak" style="font-size: .875rem;" type="submit" value="Add to Cart">
                    </form>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-3"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2016/03/05/20/07/abstract-1238657_1280.jpg"></div>
                <div class="col-md-6 mt-3">
                    <h5>Smoked BBQ Ribs</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- Tender and flavorful pork ribs slow-smoked to perfection, basted with our signature house-made BBQ sauce. Served with sweet potato fries and coleslaw, this dish is a true BBQ lover's delight.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱1,200</h4><span class="strike-text">₱2,000</span>
                    </div>
                    <h6 class="text-success">Serving Time: 15 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button></div>

                    <!-- Form Add to Cart button -->
                    <form class="btn-cart d-flex flex-column mt-2" action="cart.php" method="post">
                      <input class="btn btn-outline-dark btn-sm" name="s-ribs" style="font-size: .875rem;" type="submit" value="Add to Cart">
                    </form>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-2"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2013/06/09/06/07/meat-123668_1280.jpg"></div>
                <div class="col-md-6 mt-2">
                    <h5>Filet Mignon and Baby Back Ribs Combo</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- Indulge in the best of both worlds with a combination of a perfectly cooked 8-ounce filet mignon and a half rack of baby back ribs. Accompanied by loaded baked potatoes and grilled asparagus, this mouthwatering duo is sure to satisfy all your cravings.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱2,500</h4><span class="strike-text">$3,000</span>
                    </div>
                    <h6 class="text-success">Serving Time: 40 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button></div>

                    <!-- Form Add to Cart button -->
                    <form class="btn-cart d-flex flex-column mt-2" action="cart.php" method="post">
                      <input class="btn btn-outline-dark btn-sm" name="f-ribs" style="font-size: .875rem;" type="submit" value="Add to Cart">
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
