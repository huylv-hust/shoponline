<?php
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->id = '';
$request->parent = $cate['id'];
$request->data = '';
$request->remove = '';

$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);
if($response->process == 1) {
    $groups = json_decode($response->data, true);
}