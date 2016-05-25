<?php
/** setting **/
define('BASEURL' , 'http://demowebshop.esy.es/');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/ShopOnline');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$ketnoi['Server']['name'] = 'localhost';
$ketnoi['Database']['dbname'] = 'shop';
$ketnoi['Database']['username'] = 'root';
$ketnoi['Database']['password'] = '';
$con = mysql_connect(
    "{$ketnoi['Server']['name']}",
    "{$ketnoi['Database']['username']}",
    "{$ketnoi['Database']['password']}")
or die("Can not connect database");
mysql_select_db(
    "{$ketnoi['Database']['dbname']}")
or die("Can not connect database");
mysql_query("SET NAMES utf8");