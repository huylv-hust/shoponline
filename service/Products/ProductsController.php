<?php

include '../Database.php';
include '../Encrypt.php';
include '../Response.php';
include '../Mail/Mail.php';

class Products extends SoapServer {
    public function Check ($request){
        $db = new Database();
        $encrypt = new Encrypt();
        $response = new Response();

        $code = $request->code;
        $token = $request->token;
        $data = $request->data;
        $id = $request->id;
        $type = $request->type;
        $category_id = $request->category_id;
        $sub_category_id = $request->sub_category_id;
        $remove = $request->remove;

        if($token && !$code) {
            //List Product Frontend
            $de_code = $encrypt->Decode($token);
            if($de_code['email'] && $de_code['time'] >= time()) {
                //đã đăng ký và còn hạn sử dụng
                $filter = [
                    'id' => $id,
                    'type' => $type,
                    'category_id' => $category_id,
                    'sub_category_id' => $sub_category_id,
                ];
                if($db->getProduct($filter)) {
                    $response->process = 1;
                    $response->message = 'List Product thành công';
                    $response->data = json_encode($db->getProduct());
                }else {
                    $response->process = 0;
                    $response->message = 'Không lấy được Product';
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
            $filter = [
                'id' => $id,
                'type' => $type,
            ];
            if($de_code['email'] && $de_code['time'] >= time()) {
                if(!$id) {
                    if(!$data) {
                        //List Product
                        if($db->getProduct()) {
                            $response->process = 1;
                            $response->message = 'List Product thành công';
                            $response->data = json_encode($db->getProduct($filter));
                        }else {
                            $response->process = 0;
                            $response->message = 'Không lấy được Product';
                        }
                    }else {
                        //Tạo mới Product
                        if($db->createProduct(json_decode($data,true))) {
                            $response->process = 1;
                            $response->message = 'Tạo Product thành công';
                        }else {
                            $response->process = 0;
                            $response->message = 'Không tạo được Product';
                        }
                    }
                }else {
                    if(!$data) {
                        if(!$remove) {
                            //List 1 Product
                            if($db->getProduct($filter)) {
                                $response->process = 1;
                                $response->message = 'Lấy 1 Product thành công';
                                $response->data = json_encode($db->getProduct(['id' => $id]));
                            }else {
                                $response->process = 0;
                                $response->message = 'Không lấy được 1 Product';
                            }
                        }else {
                            //remove
                            if($db->removeProduct($id)) {
                                $response->process = 1;
                                $response->message = 'Xóa Product thành công';
                            }else {
                                $response->process = 0;
                                $response->message = 'Không xóa được Product';
                            }
                        }

                    }else {
                        //Update
                        if($db->updateProduct(json_decode($data, true), $id)) {
                            $response->process = 1;
                            $response->message = 'Update Product thành công';
                        }else {
                            $response->process = 0;
                            $response->message = 'Không Update được Product';
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

$service = new Products('Products.wsdl');
$service->setClass('Products');
$service->handle();