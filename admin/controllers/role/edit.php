<?php
$request = new Request();
$request->email = '';
$request->pass = '';
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->remove = '';

if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
    $request->id = $_GET['id'];
    $user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
    $response = $user->Check($request);

    $role = json_decode($response->data, true)[0];
}

if (!empty($_POST)) {
    $request->id = isset($_POST['id']) ? $_POST['id'] : '';
    $info = [
        'username' => $_POST['username'],
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
    ];
    
    if($_POST['password'] && $_POST['confirm']) {
        if($_POST['password'] == $_POST['confirm']) {
            $info['password'] = sha1($_POST['password']);
        }
    }
    
    $request->data = json_encode($info);
    $user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
    $response = $user->Check($request);

    if($response->process == 1){
        header('location:admin.php?controller=role');
    }
}

$title = isset($_GET['id']) ? 'Thay Đổi Thông Tin' : 'Thêm Tài Khoản';

require('admin/views/role/edit.php');