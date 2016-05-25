<?php
function products_delete($id) {
    $id = intval($id);
    $product = get_a_record('product', $id);
    $image = 'public/upload/product/'.$product['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM product WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}