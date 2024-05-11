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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="stckimg/BBMbig.png" type="image/x-icon">
</head>
<body class="montserrat-font">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="stckimg/BBMbig.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top rounded-circle">
          BIG BARGAIN MART
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQ.php">FAQs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link active" href="Reviews.php">Reviews</a>
            </li>
          </ul>
        <div class="d-flex">
          <a href="logout.php" class="btn btn-danger me-4"> Log out <?php echo htmlspecialchars($_SESSION["username"]) ?>!</a>
          <a href="cartpage.php"><img src="stckimg/cartlogo.png" alt="cartlogo" width="30" height="30"></a>
        </div>
      </div>
    </div>
  </nav>
      <hr>
      <main class="container">
        <h1 class="display-1">Reviews</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                    <h1 class="card-title h5">@geneger</h1>
                    <img src="stckimg/clothing.jpg" alt="">
                    <p class="card-body">Order arrived on time. So satisfied.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                    <h1 class="card-title h5">@geneger</h1>
                    <img src="stckimg/clothing.jpg" alt="">
                    <p class="card-body">Order arrived on time. So satisfied.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
            <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                    <h1 class="card-title h5">@geneger</h1>
                    <img src="stckimg/clothing.jpg" alt="">
                    <p class="card-body">Order arrived on time. So satisfied.</p>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
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