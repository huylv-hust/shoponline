<?php
$request = new Request();
$request->email = '';
$request->pass = '';
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->remove = '';

if(isset($_GET['id']) && $_GET['id']) {
    $request->id = $_GET['id'];
    $user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
    $response = $user->Check($request);

    $role = json_decode($response->data, true)[0];
}

if (!empty($_POST)) {
    $request->data = json_encode($_POST);
    $user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
    $response = $user->Check($request);

    if($response->process == 1){
        header('location:admin.php?controller=role');
    }
}

$title = isset($_GET['id']) ? 'Sửa quyền truy cập' : 'Thêm quyền truy cập';

require('admin/views/role/edit.php');