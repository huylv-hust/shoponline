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

$title = 'Thông tin tài khoản';

require('admin/views/role/info.php');