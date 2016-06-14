<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = '';
$request->data = '';
$request->remove = '';

$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);
if($response->process == 1) {
    $category = json_decode($response->data, true);
}

$title = 'Danh mục sản phẩm';

require('admin/views/category/index.php');