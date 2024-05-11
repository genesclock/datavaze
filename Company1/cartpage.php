<?php
include 'dbconnect.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: loginpage.php"); // Redirect to login page if not logged in
  exit();
} else {
  $username = $_SESSION['username'];
  // Check if error message is set in session
  $errorMessage = "";
}

if (isset($_SESSION['user_id'], $_POST['total_price'])) {
  $user_id = $_SESSION['user_id'];
  $total_price = $_POST['total_price'];

  $query = "INSERT INTO orders (user_id, total_price) VALUES ($user_id, $total_price)";
  $result = $connection->query($query); // Changed $mysqli to $connection

  if ($result) {
    echo "Order placed successfully.";
    // Redirect or display success message
  } else {
    echo "Failed to place order.";
  }
}

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBM | Category</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="stckimg/BBMbig.png" type="image/x-icon">
</head>

<body class="montserrat-font">
  <?php if (!empty($errorMessage)): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $errorMessage; ?>
    </div>
  <?php endif; ?>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="stckimg/BBMbig.png" alt="Logo" width="30" height="30"
          class="d-inline-block align-text-top rounded-circle">
        BIG BARGAIN MART
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
          <a href="logout.php" class="btn btn-danger me-4"> Log out
            <?php echo htmlspecialchars($_SESSION["username"]) ?>!</a>
          <a href="cartpage.php"><img src="stckimg/cartlogo.png" alt="cartlogo" width="30" height="30"></a>
        </div>
      </div>
    </div>
  </nav>
  <hr>
  <main class="container">
    <h3 class="h3">My Shopping Cart</h3>

    <?php
    // Attempt select query execution
    $sql = "SELECT
    transaction.product_id,
    product.product_name,
    transaction.quantity,
    product.price,
    product.price * transaction.quantity AS TotalPrice
    FROM transaction 
    LEFT JOIN 
    product ON transaction.product_id = product.product_id
    LEFT JOIN 
    users ON transaction.username = users.username WHERE transaction.username = '$username';";

    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
      echo '<table class="table table-bordered table-striped">';
      echo "<thead>";
      echo "<tr>";
      echo "<th>Product ID</th>";
      echo "<th>Product Name</th>";
      echo "<th>Quantity</th>";
      echo "<th>Price</th>";
      echo "<th>Total Price</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      $overallTotal = 0;
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['product_id'] . "</td>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . ($row['quantity'] * $row['price']) . "</td>";
        echo "</tr>";
        $overallTotal += $row['TotalPrice'];
      }
      echo "</tbody>";
      echo "</table>";
      echo "<p class=\"text-end\"><b>Overall Total: $overallTotal</b></p>";
      
      // Free result set
      $result->free();
    } else {
      echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
    ?>
    <?php
    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

    // Display cart items
    if (is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
      foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Display cart item details
      }
    }
    ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>

</body>
</html>
