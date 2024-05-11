<?php 
include 'dbconnect.php';

// Start the session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the product_id, and quantity from the form
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];

    // Check if username is set in the session
    if(isset($_SESSION['username'])) {
        // Insert the transaction into the Transaction table
        $sql = "INSERT INTO Transaction (username, product_id, quantity, transaction_date) VALUES (?, ?, ?, NOW())";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sii", $_SESSION['username'], $product_id, $quantity);

        if ($stmt->execute()) {
            // Transaction successfully inserted, add product to cart
            $_SESSION['cart'][$product_id] = $quantity;
            echo "Product added to cart successfully.";
            header("Location: cartpage.php");
            exit(); // Terminate script after redirection
        } else {
            // Error inserting transaction
            $errorMessage = "Failed to add product to cart.";
        }
    } else {
        // Username is not set in the session
        $errorMessage = "User is not logged in.";
    }
}

// Display error message if any
if (!empty($errorMessage)) {
    echo $errorMessage;
}
?>
