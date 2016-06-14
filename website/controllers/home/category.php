<?php
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->id = '';
$request->data = '';
$request->remove = '';

$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);
if($response->process == 1) {
    $category = json_decode($response->data, true);
}