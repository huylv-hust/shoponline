<?php
include 'Database.php';
include 'Encrypt.php';
include 'Response.php';
include 'Mail/Mail.php';


class Test{
	public function Regist (){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();
		$mail = new Mail();

		$email = 'levanhuy93@gmail.com';
		$password = '123456';
		$token = 'ZXlKemFXZHVJam9pYUhWNWJIWWlmUT09ZXlKbGJXRnBiQ0k2SWpUX3MyX0hpTldFelpHVTRaREptWXpBelptTTJOVGxqTXpRM01XSTNaRGN3WVdReklpd2lkR2xIX3MyX1RaU0k2TVRRMk9ERXlORGt5TUN3aWNHRnpjM2R2Y21RaU9pSWlmUT09';


		if($email) {
			$data = $db->getUser();
			$en_code = $encrypt->Encode($email, $password);
			$de_code = $encrypt->Decode($en_code);
			$token = $db->CheckRegist($email);

			var_dump($data);die;
			//$mail->send_gmail($email, 'Tuan Anh', 'TEST MAIL', $token);
			//var_dump($db->CheckUser($email,$password,$token));die;
			//var_dump($en_code);
			//var_dump(time());
		}

		return $response;
	}

}

$test = new Test();
$test->Regist();