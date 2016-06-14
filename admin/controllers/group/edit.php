<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = '';
$request->parent = '';
$request->data = '';
$request->remove = '';

if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
    $request->id = $_GET['id'];
    $sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
    $response = $sub_categories->Check($request);
    
    if($response->process == 1) {
        $group = json_decode($response->data, true)[0];
    }
}

//Category
$request->id = '';
$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);

if($response->process == 1) {
    $category = json_decode($response->data, true);
}

if (!empty($_POST)) {
    $request->id = isset($_POST['id']) ? $_POST['id'] : '';

    $subcategory = array(
        'name' => escape($_POST['name']),
        'status' => 1,
        'parent_id' => intval($_POST['parent_id']),
        'alias' => escape($_POST['alias'])
    );

    $request->data = json_encode($subcategory);
    $sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
    $response = $sub_categories->Check($request);

    if($response->process == 1){
        header('location:admin.php?controller=group');
    }
}

$title = isset($_GET['id']) ? 'Sửa nhóm danh mục' :'Thêm nhóm danh mục';

require('admin/views/group/edit.php');