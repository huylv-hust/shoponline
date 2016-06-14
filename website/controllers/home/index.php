<?php
$banner_left = get_a_record('banner',1);
$banner_right = get_a_record('banner',2);
$banner_ads = get_a_record('banner',3);
$slideshow = get_a_record('slideshow',1);

//new
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->data = '';
$request->id = '';
$request->type = 1;
$request->category_id = '';
$request->sub_category_id = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $new_products = json_decode($response->data, true);
}

//order
$request->type = 2;
$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $order_products = json_decode($response->data, true);
}

//sale
$request->type = 3;
$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $saleoff_products = json_decode($response->data, true);
}

$title = 'Trang chủ';
require('website/views/home/index.php');