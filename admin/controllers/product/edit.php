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


if(isset($_GET['id']) && $_GET['id'] && !$_POST) {
    $request->id = $_GET['id'];
    $user = new Client('http://localhost/shoponline/service/Products/ProductsController.php?wsdl');
    $response = $user->Check($request);
    if($response->process == 1) {
        $product = json_decode($response->data, true)[0];
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
}


//load model
require_once('admin/models/products.php');
if (!empty($_POST)) {
    $name = escape($_POST['name']);

    $product = array(
        'id' => intval($_POST['id']),
        'category_id' => intval($_POST['category_id']),
        'sub_category_id' => intval($_POST['sub_category_id']),
        'name' => $name,
        'alias' => alias($name),
        'size' => escape($_POST['size']),
        'type' => intval($_POST['type_id']),
        'price' => intval($_POST['price']),
        'color' => escape($_POST['color']),
        'material' => escape($_POST['material']),
        'createdate' => escape($_POST['createdate']),
        'sale' => intval($_POST['status']),
        'percent_off' => intval($_POST['percent_off']),
        'totalview' => intval($_POST['totalview']),
        'description' => ($_POST['description'])
    );
    $pid = save('product', $product);
    //upload ảnh 1
    $image_name1 = 'product1'.$pid.'-'.alias($name);
    $config1 = array(
        'name' => $image_name1,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image1 = upload('Image1', $config1);
    //cập nhật ảnh mới
    if($image1){
        $product = array(
            'Id' => $pid,
            'Image1' => $image1
        );
        save('product', $product);
    }
    //upload ảnh 2
    $image_name2 = 'product2'.$pid.'-'.alias($name);
    $config2 = array(
        'name' => $image_name2,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image2 = upload('Image2', $config2);
    //cập nhật ảnh mới
    if($image2){
        $product = array(
            'Id' => $pid,
            'Image2' => $image2
        );
        save('product', $product);
    }
    //upload ảnh 3
    $image_name3 = 'product3'.$pid.'-'.alias($name);
    $config3 = array(
        'name' => $image_name3,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image3 = upload('Image3', $config3);
    //cập nhật ảnh mới
    if($image3){
        $product = array(
            'Id' => $pid,
            'Image3' => $image3
        );
        save('product', $product);
    }
    //upload ảnh 4
    $image_name4 = 'product4'.$pid.'-'.alias($name);
    $config4 = array(
        'name' => $image_name4,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image4 = upload('Image4', $config4);
    //cập nhật ảnh mới
    if($image4){
        $product = array(
            'Id' => $pid,
            'Image4' => $image4
        );
        save('product', $product);
    }
    //chuyển hướng
    header('location:admin.php?controller=product');
}


require('admin/views/product/edit.php');