<?php
function categories_delete($id) {
    $id = intval($id);
    require_once('admin/models/products.php');
    $options = array(
        'select' => 'id',
        'where' => 'CategoryId='.$id
    );
    $products = get_all('product', $options);
    foreach ($products as $product) {
        products_delete($product['id']);
    }
    //xóa danh mục
    $sql = "DELETE FROM categories WHERE Id=$id";
    mysql_query($sql) or die(mysql_error());
}