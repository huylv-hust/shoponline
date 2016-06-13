<?php
$request = new Request();
$request->email = '';
$request->pass = '';
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $roles = json_decode($response->data, true);
}

$title = 'Danh sách quyền truy cập website';

require('admin/views/role/index.php');