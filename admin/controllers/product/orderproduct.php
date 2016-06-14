<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = 2;
$request->category_id = '';
$request->sub_category_id = '';
$request->name = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $product_order = json_decode($response->data, true);
}

$title = 'Sản phẩm mới order';

require('admin/views/product/orderproduct.php');