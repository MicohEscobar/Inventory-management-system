<?php
function getProduct($product_id) {
    global $conn;

    $sql = "SEKECT * FROM producs WHERE product_id = $product_id";
    $result = $conn->query(sql);

    if ($result->num_rows > 0){
        return $result -> fetch_assoc();
    } else {
        return "Product not found";
    }
}
?>