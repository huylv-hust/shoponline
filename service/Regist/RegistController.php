<?php
include '../Database.php';
include '../Encrypt.php';
include '../Response.php';

class Regist extends SoapServer {
	public function Regist ($request){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();

		$email = $request->email;
		$name = $request->name;

		if($email) {
			$token = $db->CheckRegist($email);
			if($token) {
				$de_code = $encrypt->Decode($token);

				if($de_code['email'] && $de_code['time'] >= time()) {
					//đã đăng ký và còn hạn sử dụng
					$response = 0;
				}

				if($de_code['email'] && $de_code['time'] < time()) {
					//đã đăng ký và hết hạn sử dụng
					$token = $encrypt->Encode($email);
					if ($db->Regist($email, $name, $token)) {
						$response->process = 1;
						$response->token = $token;
					} else {
						$response->process = 0;
					}
				}
			}else{
				//đăng ký
				$token = $encrypt->Encode($email);
				if ($db->Regist($email, $name, $token)) {
					$response->process = 1;
					$response->token = $token;
				} else {
					$response->process = 0;
				}
			}
		}

		return $response;
	}
	
}

$service = new Regist('Regist.wsdl');
$service->setClass('Regist');
$service->handle();