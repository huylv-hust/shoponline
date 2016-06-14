<?php

include '../Database.php';
include '../Encrypt.php';
include '../Response.php';
include '../Mail/Mail.php';

class Sub extends SoapServer {
	public function Check ($request){
		$db = new Database();
		$encrypt = new Encrypt();
		$response = new Response();
		
		$code = $request->code;
		$token = $request->token;
		$data = $request->data;
		$id = $request->id;
		$parent = $request->parent;
		$remove = $request->remove;
		
		if($token && !$code) {
			//List Sub Frontend
			$de_code = $encrypt->Decode($token);
			if($de_code['email'] && $de_code['time'] >= time()) {
				//đã đăng ký và còn hạn sử dụng
				if($db->getSub()) {
					$response->process = 1;
					$response->message = 'List Sub thành công';
					$response->data = json_encode($db->getSub());
				}else {
					$response->process = 0;
					$response->message = 'Không lấy được Sub';
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
						//List Sub
						$filter =[
							'parent_id' => $parent
						];
						if($db->getSub()) {
							$response->process = 1;
							$response->message = 'List Sub thành công';
							$response->data = json_encode($db->getSub($filter));
						}else {
							$response->process = 0;
							$response->message = 'Không lấy được Sub';
						}
					}else {
						//Tạo mới Sub
						if($db->createSub(json_decode($data,true))) {
							$response->process = 1;
							$response->message = 'Tạo Sub thành công';
						}else {
							$response->process = 0;
							$response->message = 'Không tạo được Sub';
						}
					}
				}else {
					if(!$data) {
						if(!$remove) {
							//List Sub theo Category
							$filter = [
								'id' => $id,
								'paren_id' => $parent,
							];
							if($db->getSub($filter)) {
								$response->process = 1;
								$response->message = 'Lấy 1 Sub thành công';
								$response->data = json_encode($db->getSub($filter));
							}else {
								$response->process = 0;
								$response->message = 'Không lấy được 1 Sub';
							}
						}else {
							//remove
							if($db->removeSub($id)) {
								$response->process = 1;
								$response->message = 'Xóa Sub thành công';
							}else {
								$response->process = 0;
								$response->message = 'Không xóa được Sub';
							}
						}
						
					}else {
						//Update
						if($db->updateSub(json_decode($data, true), $id)) {
							$response->process = 1;
							$response->message = 'Update Sub thành công';
						}else {
							$response->process = 0;
							$response->message = 'Không Update được Sub';
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

$service = new Sub('Sub.wsdl');
$service->setClass('Sub');
$service->handle();