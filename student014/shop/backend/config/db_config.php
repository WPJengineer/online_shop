<?php

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'online_shop_db', 3307);

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>