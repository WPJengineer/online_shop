<?php
// Get data

print_r($_POST);
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$conn = mysqli_connect('localhost', 'root', '', 'online_shop_db', 3307);




// Put data in the database

include('../config/db_config.php');

$sql ="INSERT INTO product (product_name, product_unit_price)
VALUES ('$product_name', '$product_price')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Send confirmation



?>