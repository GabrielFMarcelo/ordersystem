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

    <title>Salad & Sides</title>
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
          <div class="navbar-nav">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
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
          <h1 class="text-uppercase text-center pb-3 fnt">Salad & Sides</h1>
        </div>
        <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-3"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2016/08/12/18/55/tomato-mozzarella-1589411_1280.jpg"></div>
                <div class="col-md-6 mt-3">
                    <h5 name="food">Classic Caesar Salad</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- Crisp romaine lettuce tossed in a creamy Caesar dressing, topped with shaved Parmesan cheese, garlic croutons, and anchovies (optional). A timeless favorite that pairs perfectly as a starter or side dish.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱500</h4><span class="strike-text">₱750</span>
                    </div>
                    <h6 class="text-success">Serving Time: 15 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button><button class="btn btn-outline-dark btn-sm mt-2" name="" type="button">Add to cart</button></div>

                    <!-- Add to Cart button -->
                    <form class="btn-cart" action="cart.php" method="post">
                      <input class="btn btn-dark py-2 mr-2" name="c-salad" style="font-size: 25px;" type="submit" value="Add to Cart">
                    </form>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-3"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2017/11/23/14/54/food-2972974_1280.jpg"></div>
                <div class="col-md-6 mt-3">
                    <h5>Caprese Salad</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- A refreshing combination of vine-ripened tomatoes, fresh mozzarella cheese, and fragrant basil leaves, drizzled with extra virgin olive oil and balsamic glaze. This vibrant salad celebrates the flavors of Italy and makes for a light and delightful option.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱500</h4><span class="strike-text">₱750</span>
                    </div>
                    <h6 class="text-success">Serving Time: 15 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button><button class="btn btn-outline-dark btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded shadow bg-white card-block mb-3 pb-3">
                <div class="col-md-3 mt-2"><img class="img-fluid img-responsive rounded product-image" src="https://cdn.pixabay.com/photo/2017/03/19/18/10/baked-potatoes-2157200_1280.jpg"></div>
                <div class="col-md-6 mt-2">
                    <h5>Loaded Baked Potato</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1 text-justify">
                      <span>- A hearty side dish featuring a baked potato generously topped with melted cheddar cheese, crispy bacon bits, sour cream, and chives. This indulgent classic is a crowd-pleaser that perfectly complements any main course.</span>
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">₱350</h4><span class="strike-text">$600</span>
                    </div>
                    <h6 class="text-success">Serving Time: 20 minutes</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-dark btn-sm" type="button">Details</button><button class="btn btn-outline-dark btn-sm mt-2" type="button">Add to cart</button></div>
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
