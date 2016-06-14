<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = '';
$request->data = '';
$request->remove = '';

if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
    $request->id = $_GET['id'];
    $categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
    $response = $categories->Check($request);

    $category = json_decode($response->data, true)[0];
}

if (!empty($_POST)) {
    $request->id = isset($_POST['id']) ? $_POST['id'] : '';

    $category = array(
        'name' => escape($_POST['name']),
        'status' => 1,
        'position' => intval($_POST['position']),
        'alias' => escape($_POST['link'])
    );

    $request->data = json_encode($category);
    $categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
    $response = $categories->Check($request);

    if($response->process == 1){
        header('location:admin.php?controller=category');
    }
}

$title = isset($_GET['id']) ? 'Sửa danh mục' : 'Thêm danh mục';

require('admin/views/category/edit.php');