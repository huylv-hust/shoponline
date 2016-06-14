<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = $_GET['id'];
$request->parent = '';
$request->data = '';
$request->remove = 1;

$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);
if($response->process == 1) {
	header('location:admin.php?controller=group');
}