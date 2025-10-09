<?php
    $backend = $_SERVER['DOCUMENT_ROOT'].'/student014/shop/backend/';
?>

<?php include($backend.'header.php'); ?> <!--here goes name of my header.php file and location in folder-->

<form action="/student014/shop/backend/db/db_product_insert.php" method="POST">
    <?php // echo 'file we send data to'; ?>
    <p>
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id">
    </p>
    <p>
        <label for="product_name">Product name:</label>
        <input type="text" id="product_name" name="product_name">
    </p>
    <p>
        <label for="product_price">Product price:</label>
        <input type="number" id="product_price" name="product_price">
    </p>
    <p>
        <input type="submit" value="Submit">
    </p>
</form>

<?php include ($backend.'footer.php'); ?> <!--here goes name of my footer.php file and location in folder-->