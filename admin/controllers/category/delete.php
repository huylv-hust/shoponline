<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = $_GET['id'];
$request->data = '';
$request->remove = 1;

$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);

if($response->process == 1) {
	header('location:admin.php?controller=category');
}