<?php

include '../Database.php';
include '../Encrypt.php';
include '../Response.php';
include '../Mail/Mail.php';

class Users extends SoapServer {
	public function Check ($request){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();

		$email = $request->email;
		$password = $request->password;
		$code = $request->code;
		$token = $request->token;
		$data = $request->data;

		if($token) {
			//login
			$de_code = $encrypt->Decode($token);
			if($de_code['email'] && $de_code['time'] >= time()) {
				//đã đăng ký và còn hạn sử dụng
				if($db->CheckUser($email, $password)) {
					//đăng nhập thành công
					$response->process = 1;
					$response->code = $encrypt->Encode($email, $password);
				}else{
					//không đăng nhập được
					$response->process = 0;
				}
			}else{
				//hết hạn hoặc chưa đăng ký
				$response->process = 0;
			}
		}
		
		if($code) {
			//list, tạo mới hoặc edit
		}

		return $response;
	}
}

$service = new Users('Users.wsdl');
$service->setClass('Users');
$service->handle();