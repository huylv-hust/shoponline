
<?php
$request = new Request();
$request->code = '';
$request->token = $_SESSION['token'];
$request->data = '';
$request->id = '';
$request->type = '';
$request->category_id = '';
$request->sub_category_id = '';
$request->name = $_GET["id"];
$request->remove = '';

$user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
$response = $user->Check($request);

if($response->process == 1){
    $products = json_decode($response->data, true);
}

require('website/views/search/index.php');