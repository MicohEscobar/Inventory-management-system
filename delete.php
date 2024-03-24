<?php
include_once 'config.php';
function deleteProduct($product_id){
    global $conn;

    $sql = "DELETE FROM products WHERE $product_id = $product_id";

    if ($conn->query($sql)===TRUE) {
        return "Product delete successfully";

    }else {
        return "Error deleting product: " . $conn->error;
    }
}

?>