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

		if($token && !$code) {
			//login
			$de_code = $encrypt->Decode($token);
			if($de_code['email'] && $de_code['time'] >= time()) {
				//đã đăng ký và còn hạn sử dụng
				if($db->CheckUser($email, $password)) {
					//đăng nhập thành công
					$response->process = 1;
					$response->message = 'Đăng nhập thành công';
					$response->code = $encrypt->Encode($email, $password);
				}else {
					//không đăng nhập được
					$response->process = 0;
					$response->message = 'Đăng nhập không thành công';
				}
			}else {
				//hết hạn hoặc chưa đăng ký
				$response->process = 0;
				$response->message = 'Hết thời gian sử dụng hoặc chưa đăng ký';
			}
		}
		
		elseif($code && !$token) {
			//list, tạo mới hoặc edit
			if(!$data) {
				if($db->getUser()) {
					$response->process = 1;
					$response->message = 'Lấy User thành công';
					$response->code = $code;
					$response->data = json_encode($db->getUser());
				}else{
					$response->process = 0;
					$response->message = 'Không lấy được User';
				}
			}
		}else {
			//lỗi
			$response->process = 0;
			$response->message = 'Xảy ra lỗi';
		}

		return $response;
	}
}

$service = new Users('Users.wsdl');
$service->setClass('Users');
$service->handle();