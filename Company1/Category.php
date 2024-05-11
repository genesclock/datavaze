<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php"); // Redirect to login page if not logged in
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBM | Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="stckimg/BBMbig.png" type="image/x-icon">
</head>

<body class="montserrat-font">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="stckimg/BBMbig.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top rounded-circle">
                BIG BARGAIN MART
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Category.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Reviews.php">Reviews</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger me-4"> Log out
                        <?php echo htmlspecialchars($_SESSION["username"]) ?>!</a>
                    <a href="cartpage.php"><img src="stckimg/cartlogo.png" alt="cartlogo" width="30" height="30"></a>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <main class="container">
        <h5 class="display-4">Men's Footwear</h5>
        <div class="row">

            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Men 1</h5>
                    <img src="stckimg/men1.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="1" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Men 2</h5>
                    <img src="stckimg/men2.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="2" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Men 3</h5>
                    <img src="stckimg/men3.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="3" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Men 4</h5>
                    <img src="stckimg/men4.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="4" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Men 5</h5>
                    <img src="stckimg/men5.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="5" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">  </div>


        <h5 class="display-4 mt-5">Ladies Footwear</h5>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Lady 1</h5>
                    <img src="stckimg/lady1.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="6" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Lady 2</h5>
                    <img src="stckimg/lady2.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="7" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Lady 3</h5>
                    <img src="stckimg/lady3.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="8" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Lady 4</h5>
                    <img src="stckimg/lady4.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="9" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Lady 5</h5>
                    <img src="stckimg/lady5.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="10" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>
        <h5 class="display-4 mt-5">Kids Footwear</h5>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Kids 1</h5>
                    <img src="stckimg/kids1.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="11" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Kids 2</h5>
                    <img src="stckimg/kids2.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="12" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Kids 3</h5>
                    <img src="stckimg/kids3.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="13" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Kids 4</h5>
                    <img src="stckimg/kids4.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="14" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Kids 5</h5>
                    <img src="stckimg/kids5.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="15" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>
        <h5 class="display-4 mt-5">Toddlers Footwear</h5>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Toddlers 1</h5>
                    <img src="stckimg/todd1.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="16" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Toddlers 2</h5>
                    <img src="stckimg/todd2.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="17" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Toddlers 3</h5>
                    <img src="stckimg/todd3.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="18" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Toddlers 4</h5>
                    <img src="stckimg/todd4.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="19" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Toddlers 5</h5>
                    <img src="stckimg/todd5.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="20" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>
        <h5 class="display-4 mt-5">Accessories</h5>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Accessory 1</h5>
                    <img src="stckimg/accessory1.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="21" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Accessory 2</h5>
                    <img src="stckimg/accessory2.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="22" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Accessory 3</h5>
                    <img src="stckimg/accessory3.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="23" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Accessory 4</h5>
                    <img src="stckimg/accessory4.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="24" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="card">
                    <h5 class="h5 text-center">Accessory 5</h5>
                    <img src="stckimg/accessory5.jpg" alt="">
                    <div class="container">
                    <form method="post" action="post-transact.php" class="text-center">
                        <input type="hidden" name="product_id" value="25" required>
                        <input type="text" name="quantity" value="1" size="4">
                        <button type="button" class="btn btn-light mb-2 w-100 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Product</button>
                        <button type="button" class="btn btn-light mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">View Ratings</button>
                        <button type="submit" class="btn btn-dark mb-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-1"></div>
        </div>
        </form>
    </main>
    <footer class="container-fluid bg-dark mt-5">
        <div class="row">
            <div class="col-lg-3 text-white mt-2 mb-2">
                <img src="stckimg/BBMlogo.png" alt="" width="30" height="30 " class="rounded-circle">
                BIG BARGAIN MARKET
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-3 text-end">
                <img src="stckimg/igicon.jpg" alt="" width="30" height="30 " class="mt-2 mb-2">
                <img src="stckimg/gmailicon.jpg" alt="" width="30" height="30 " class="mt-2 mb-2">
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>