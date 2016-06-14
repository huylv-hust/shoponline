<?php
//product
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->data = '';
$request->id = '';
$request->type = '';
$request->category_id = '';
$request->sub_category_id = intval($_GET['id']);
$request->name = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
	$products = json_decode($response->data, true);
}

//category
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->id = intval($_GET['id']);
$request->parent = '';
$request->data = '';
$request->remove = '';

$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);

if($response->process == 1) {
	$sub_category = json_decode($response->data, true)[0];
}

if ($sub_category['id']!=0) {
	$breadCrumb = $sub_category['name'];
}
$title = $sub_category['name'];
//load view
require('website/views/category/index.php');