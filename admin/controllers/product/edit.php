<?php
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->data = '';
$request->id = '';
$request->type = '';
$request->category_id = '';
$request->sub_category_id = '';
$request->remove = '';

//List
if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
    $request->id = $_GET['id'];
    $user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
    $response = $user->Check($request);
    if ($response->process == 1) {
        $product = json_decode($response->data, true)[0];
    }
}

//Category
$request->id = '';
$categories = new Client('http://localhost/shoponline/service/Category/CategoryController.php?wsdl');
$response = $categories->Check($request);
if($response->process == 1) {
    $category = json_decode($response->data, true);
}
//Sub Category
$request->id = '';
$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);
if($response->process == 1) {
    $sub_category = json_decode($response->data, true);
}

//Creat - Edit
if (!empty($_POST)) {
    $request->id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = escape($_POST['name']);

    $product = array(
        'category_id' => intval($_POST['category_id']),
        'sub_category_id' => intval($_POST['sub_category_id']),
        'name' => $name,
        'alias' => alias($name),
        'size' => escape($_POST['size']),
        'type' => intval($_POST['type']),
        'price' => intval($_POST['price']),
        'color' => escape($_POST['color']),
        'material' => escape($_POST['material']),
        'editdate' => escape(date('Y-m-d')),
        'sale' => intval($_POST['sale']),
        'percent_off' => intval($_POST['percent_off']),
        'totalview' => intval($_POST['totalview']),
        'description' => ($_POST['description'])
    );

    if(!isset($_POST['id'])) {
        $product['createdate'] = escape(date('Y-m-d'));
    }

    //upload ảnh 1
    if($_FILES['image1']['name']) {
        $image_name1 = '1-'.alias($name).'-'.time();
        $config1 = array(
            'name' => $image_name1,
            'upload_path'  => 'public/upload/product/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $product['image1'] = upload('image1', $config1);
    }

    //upload ảnh 2
    if($_FILES['image2']['name']) {
        $image_name2 = '2-'.alias($name).'-'.time();
        $config2 = array(
            'name' => $image_name2,
            'upload_path'  => 'public/upload/product/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $product['image2'] = upload('image2', $config2);
    }

    //upload ảnh 3
    if($_FILES['image3']['name']) {
        $image_name3 = '3-'.alias($name).'-'.time();
        $config3 = array(
            'name' => $image_name3,
            'upload_path'  => 'public/upload/product/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $product['image3'] = upload('image3', $config3);
    }
    //upload ảnh 4
    if($_FILES['image4']['name']) {
        $image_name4 = '4-'.alias($name).'-'.time();
        $config4 = array(
            'name' => $image_name4,
            'upload_path'  => 'public/upload/product/',
            'allowed_exts' => 'jpg|jpeg|png|gif',
        );
        $product['image4'] = upload('image4', $config4);
    }

    $request->data = json_encode($product);
    $user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
    $response = $user->Check($request);

    if($response->process == 1){
        header('location:admin.php?controller=product');
    }
}

$title = 'Cập nhật sản phẩm';

require('admin/views/product/edit.php');