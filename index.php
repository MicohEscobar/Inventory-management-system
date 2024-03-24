<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <style>
        /* Add your CSS styles here for a visually appealing interface */
    </style>
</head>
<body>
    <h1>Inventory Management System</h1>

    <!-- Form to Add New Item -->
    <h2>Add New Item</h2>
    <form action="create.php" method="POST">
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name"><br>
        
        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category"><br>
        
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01"><br>
        
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br>
        
        <label for="cost">Cost:</label><br>
        <input type="number" id="cost" name="cost" step="0.01"><br><br>
        
        <input type="submit" value="Add Item">
    </form>

    <!-- Form to Update Item -->
    <h2>Update Item</h2>
    <form action="update.php" method="POST">
        <label for="update_id">Product ID:</label><br>
        <input type="number" id="update_id" name="update_id"><br>
        
        <!-- Include fields to update (e.g., product_name, category, price, quantity, cost) -->
        
        <input type="submit" value="Update Item">
    </form>

    <!-- Form to Delete Item -->
    <h2>Delete Item</h2>
    <form action="delete.php" method="POST">
        <label for="delete_id">Product ID:</label><br>
        <input type="number" id="delete_id" name="delete_id"><br>
        
        <input type="submit" value="Delete Item">
    </form>

    <!-- Display Inventory Items (Read Operation) -->
    <h2>Inventory Items</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Cost</th>
        </tr>
        <?php
        // Include PHP script to fetch and display inventory items
        include_once 'fetch_items.php';
        ?>
    </table>
</body>
</html>
