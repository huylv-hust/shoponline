<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = '';
$request->category_id = '';
$request->sub_category_id = '';
$request->name = '';
$request->remove = '';

if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
	$request->id = $_GET['id'];
	$request->remove = 1;
	$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
	$response = $user->Check($request);

	if($response->process == 1) {
		header('location:admin.php?controller=product');
	}
}