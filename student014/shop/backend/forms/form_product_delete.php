<form action="../db/db_product_delete.php" method="POST">
    <!-- <p>
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
    </p> -->
    <?php
    print_r($_POST);
    ?>
    <p>
        <input type="submit" value="Submit">
    </p>
</form>