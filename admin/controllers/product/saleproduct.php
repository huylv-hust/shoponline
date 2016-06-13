<?php
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
    $product_saleoff = json_decode($response->data, true);
}

$title = 'Sản phẩm khuyến mại';

require('admin/views/product/saleproduct.php');