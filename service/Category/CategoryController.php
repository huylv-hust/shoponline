<?php

include '../Database.php';
include '../Encrypt.php';
include '../Response.php';
include '../Mail/Mail.php';

class Category extends SoapServer {
	public function Check ($request){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();
		
		$code = $request->code;
		$token = $request->token;
		$data = $request->data;
		$id = $request->id;
		$remove = $request->remove;
		
		if($token && !$code) {
			//List Category Frontend
			$de_code = $encrypt->Decode($token);
			if($de_code['email'] && $de_code['time'] >= time()) {
				//đã đăng ký và còn hạn sử dụng
				if($db->getCategory(['id' => $id])) {
					$response->process = 1;
					$response->message = 'List Category thành công';
					$response->data = json_encode($db->getCategory(['id' => $id]));
				}else {
					$response->process = 0;
					$response->message = 'Không lấy được Category';
				}
			}else {
				//hết hạn hoặc chưa đăng ký
				$response->process = 0;
				$response->message = 'Hết thời gian sử dụng hoặc chưa đăng ký';
			}
		}
		
		elseif($code && !$token) {
			//Backend
			$de_code = $encrypt->Decode($code);
			if($de_code['email'] && $de_code['time'] >= time()) {
				if(!$id) {
					if(!$data) {
						//List Category
						if($db->getCategory()) {
							$response->process = 1;
							$response->message = 'List Category thành công';
							$response->data = json_encode($db->getCategory());
						}else {
							$response->process = 0;
							$response->message = 'Không lấy được Category';
						}
					}else {
						//Tạo mới Category
						if($db->createCategory(json_decode($data,true))) {
							$response->process = 1;
							$response->message = 'Tạo Category thành công';
						}else {
							$response->process = 0;
							$response->message = 'Không tạo được Category';
						}
					}
				}else {
					if(!$data) {
						if(!$remove) {
							//List 1 Category
							if($db->getCategory(['id' => $id])) {
								$response->process = 1;
								$response->message = 'Lấy 1 Category thành công';
								$response->data = json_encode($db->getCategory(['id' => $id]));
							}else {
								$response->process = 0;
								$response->message = 'Không lấy được 1 Category';
							}
						}else {
							//remove
							if($db->removeCategory($id)) {
								$response->process = $db->removeCategory($id);
								$response->message = 'Xóa Category thành công';
							}else {
								$response->process = 0;
								$response->message = 'Không xóa được Category';
							}
						}
						
					}else {
						//Update
						if($db->updateCategory(json_decode($data, true), $id)) {
							$response->process = 1;
							$response->message = 'Update Category thành công';
						}else {
							$response->process = 0;
							$response->message = 'Không Update được Category';
						}
					}
				}
			}else {
				$response->process = 0;
				$response->message = 'Hết thời gian sử dụng';
			}
		}else {
			//lỗi
			$response->process = 0;
			$response->message = 'Xảy ra lỗi';
		}
		
		return $response;
	}
}

$service = new Category('Category.wsdl');
$service->setClass('Category');
$service->handle();