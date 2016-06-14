<?php

$request = new Request();
$request->email = '';
$request->pass = '';
$request->code = '';
$request->token = 'ZXlKemFXZHVJam9pYUhWNWJIWWlmUT09ZXlKbGJXRnBiQ0k2SWpUX3MyX0hpTldFelpHVTRaREptWXpBelptTTJOVGxqTXpRM01XSTNaRGN3WVdReklpd2lkR2xIX3MyX1RaU0k2TVRRMk9ERXlORGt5TUN3aWNHRnpjM2R2Y21RaU9pSWlmUT09';
$request->data = '';
$request->id = '';
$request->remove = '';

if (!empty($_POST)) {
    $request->email = $_POST['email'];
    $request->pass = $_POST['password'];
    
    $user = new Client('http://localhost/shoponline/service/Users/UsersController.php?wsdl');
    $response = $user->Check($request);

    if($response->process == 1){
        $_SESSION['user'] = $response->code;
        $_SESSION['time'] = time() + 20*60;
        $_SESSION['info'] = json_decode($response->data, true);
        $_SESSION['role'] =  $_SESSION['info']['role'];

        header('location:admin.php');
    }
}

$title = 'Administrator';
require('admin/views/home/login.php');
?>

