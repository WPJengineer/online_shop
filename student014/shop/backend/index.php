<?php
    $backend = $_SERVER['DOCUMENT_ROOT'].'/student014/shop/backend/';
?>

<?php include($backend.'header.php'); ?> <!--here goes name of my header.php file and location in folder-->

<p>Welcome to my backend</p>
<!-- product -->
<p>
    <a href="/student014/shop/backend/forms/form_product_select.php">Select Product</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_product_insert.php">Insert Product</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_product_update_call.php">Update Product</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_product_delete_call.php">Delete Product</a>
</p>

<!-- customer -->
<p>
    <a href="/student014/shop/backend/forms/form_customer_select.php">form_customer_select</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_customer_insert.php">form_customer_insert</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_customer_update_call.php">form_customer_update</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_customer_delete_call.php">form_customer_delete</a>
</p>

<!-- order -->
<p>
    <a href="/student014/shop/backend/forms/form_order_select.php">form_order_select</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_order_insert.php">form_order_insert</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_order_update_call.php">form_order_update</a>
</p>
<p>
    <a href="/student014/shop/backend/forms/form_order_delete_call.php">form_order_delete</a>
</p>


<?php include ($backend.'footer.php'); ?> <!--here goes name of my footer.php file and location in folder-->

</html>