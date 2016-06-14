<?php
//product
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->data = '';
$request->id = '';
$request->type = '';
$request->category_id = intval($_GET['id']);
$request->sub_category_id = '';
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
$request->data = '';
$request->remove = '';

$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);

if($response->process == 1) {
	$category = json_decode($response->data, true)[0];
}

if ($category['id']!=0) {
    $breadCrumb = $category['name'];
}
$title = $category['name'];
//load view
require('website/views/group/index.php');