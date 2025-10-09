<?php
// Get data

// print_r($_POST);

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$conn = mysqli_connect('localhost', 'root', '', 'online_shop_db', 3307);




// Put data in the database
include('../config/db_config.php');

// SQL Query
$sql = "UPDATE product
SET product_name = '$product_name', product_unit_price = '$product_price'
WHERE product_id = '$product_id'";

if (mysqli_query($conn, $sql)) {
    echo "Product details updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Send confirmation



?>