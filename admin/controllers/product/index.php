<?php
//new
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = 1;
$request->category_id = '';
$request->sub_category_id = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $products = json_decode($response->data, true);
}

//order
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = 2;
$request->category_id = '';
$request->sub_category_id = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $product_order = json_decode($response->data, true);
}

//sale
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = 3;
$request->category_id = '';
$request->sub_category_id = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $product_sale = json_decode($response->data, true);
}

$title = 'Sản phẩm';

require('admin/views/product/index.php');