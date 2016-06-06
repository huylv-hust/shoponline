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

		$email = 'tuananhcvp@gmail.com';

		if($email) {
			$en_code = $encrypt->Encode($email);
			$de_code = $encrypt->Decode($en_code);
			$token = $db->CheckRegist($email);

			$mail->send_gmail($email, 'Tuan Anh', 'TEST MAIL', $token);
			var_dump($en_code);
			var_dump($de_code);
			var_dump(time());
		}

		return $response;
	}

}

$test = new Test();
$test->Regist();