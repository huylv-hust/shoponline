<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = '';
$request->parent = '';
$request->data = '';
$request->remove = '';

$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);
if($response->process == 1) {
    $groups = json_decode($response->data, true);
}
//Category
$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);
if($response->process == 1) {
    $category = json_decode($response->data, true);
    $cate = [];
    foreach ($category as $v) {
        $cate[$v['id']] = $v['name'];
    }
}

$title = 'Danh mục nhóm sản phẩm';

require('admin/views/group/index.php');