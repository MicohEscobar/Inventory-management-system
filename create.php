<?php
function addProduct($product_name, $category, $price, $quantity, $cost) {
    global $conn;

    $sql = "INSERT INTO products (product_name, category, price, quantiy, cost)
            VALUES ('$product_name', '$category', '$price', '$quantity', '$cost')";

    if ($conn->query($sql) === TRUE) {
        return "New Product added successfuly";
    } else {
        return "Error: " .$sql . "<br>". $conn->error;
    }
}
 ?>