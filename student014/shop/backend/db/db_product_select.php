<?php
// Get data

// print_r($_POST);
$product_id = $_POST['product_id'];
$conn = mysqli_connect('localhost', 'root', '', 'online_shop_db', 3307);

// establish connection to database
include('../config/db_config.php');

// create query we want to do
$sql = "SELECT product_id, product_name
FROM product
WHERE product_id = '$product_id'";

// execute query
$result = mysqli_query($conn, $sql);

// if connection fails show error if not get result of query
if (mysqli_query($conn, $sql)) {
    
    if (mysqli_num_rows($result) > 0) {
    // Fetch and display each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Product ID: " . $row['product_id'] . "<br>";
            echo "Product Name: " . $row['product_name'] . "<br><br>";
        }
    } else {
        echo "No product found with ID: " . $product_id;
    }
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close channel after finishing query
mysqli_close($conn);

// Send confirmation



?>