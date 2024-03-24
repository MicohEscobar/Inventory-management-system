<?php
// Include the database connection
include_once 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $cost = $_POST['cost'];

    // Call the addProduct function
    $result = addProduct($product_name, $category, $price, $quantity, $cost);

    // Display result message
    echo $result;
}

// Function to add product to the database
function addProduct($product_name, $category, $price, $quantity, $cost) {
    global $conn;

    // SQL query to insert product into products table
    $sql = "INSERT INTO products (product_name, category, price, quantity, cost)
            VALUES ('$product_name', '$category', '$price', '$quantity', '$cost')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        return "New product added successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>