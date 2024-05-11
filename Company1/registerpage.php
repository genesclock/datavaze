<?php include 'dbconnect.php'?>
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
<?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>

        </div>
    <?php endif; ?>
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
                <a class="nav-link" aria-current="page" href="Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Category.php">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="FAQ.php">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Reviews.php">Reviews</a>
              </li>

            </ul>
            <div class="d-flex">
                <a href="loginpage.php"><img src="stckimg/userlogo.png" alt="userlogo" width="30" height="30"></a>
                <a href="cartpage.php"><img src="stckimg/cartlogo.png" alt="cartlogo" width="30" height="30"></a>
            </div>
          </div>
        </div>
      </nav>
      <hr>
      <main class="container">
        <div class="row text-center">
            <h1 class="display-4">Register Now!</h1>
            <div class="col-lg-3"></div>
            <div class="col-lg-6 card">
                <form action="register.php" class="mt-4" method="post">
                  <label for="username">First Name:</label><br>
                  <input type="text" id="first_name" name="first_name" size="25"><br>
                  <label for="last_name">Last Name:</label><br>
                  <input type="text" id="last_name" name="last_name" size="25"><br>
                  <label for="username">Birthdate:</label><br>
                  <input type="date" id="birthdate" name="birthdate" style="width: 250px;" class="text-center"><br>
                  <label for="password">Email:</label><br>
                  <input type="Email" id="email" name="email" size="25"><br>
                  <label for="username">Username:</label><br>
                  <input type="text" id="username" name="username" size="25"><br>
                  <label for="username">Password:</label><br>
                  <input type="password" id="PASSWORD" name="PASSWORD" size="25"><br><br>
                  <input type="submit" value="Sign Up"><br>
                  <a href="loginpage.php">Already have an account? Log-in</a>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
      </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 