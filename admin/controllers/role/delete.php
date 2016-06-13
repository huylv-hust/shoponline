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
	$request->remove = 1;
	$user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
	$response = $user->Check($request);

	if($response->process == 1){
		header('location:admin.php?controller=role');
	}
}