<?php
include 'Database.php';
include 'Encrypt.php';
include 'Response.php';

class Test{
	public function Regist (){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();

		$email = 'levanhuy93@gmail.com';

		if($email) {
			$en_code = $encrypt->Encode($email);
			$de_code = $encrypt->Decode($en_code);
			$token = $db->CheckRegist($email);
			var_dump($en_code);die;
			var_dump(time());die;
		}

		return $response;
	}

}

$test = new Test();
$test->Regist();