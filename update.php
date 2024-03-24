<?php
function updateProduct($product_id, $product_name, $category, $price, $price, $quantity, $cost){
    global $conn;

    $sql = "UPDATE products
            SET product_name = '$product_name', category = '$category', price = '$price', quantity = '$quantiy', cost = '$cost'
            WHERE product_id = $product_id";

    if ($conn->query($sql) === TRUE) {
        return "Product Update successfully";
    } else {
        return "Error updating product: " . $conn->error;
    }
}
?>