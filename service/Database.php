<?php

class Database {
	public function __construct()
	{
		$conn = mysql_connect("localhost", "root", "") or die("Not connect!");
		mysql_select_db("service",$conn);
		mysql_set_charset('utf8');
	}
// Register
	public function Regist($email, $name, $token){
		$sql = "INSERT INTO regist (email, name, token) VALUES ('".$email."', '".$name."','".$token."')";
		$query = mysql_query($sql);

		return $query;
	}

	public function Update($email, $name, $token){
		$sql = "UPDATE regist SET email = '".$email."',name = '".$name."',token = '".$token."' WHERE email = '".$email."'";
		$query = mysql_query($sql);

		return $query;
	}
	
	public function CheckRegist($email){
		$sql = "SELECT * FROM regist WHERE email = '".$email."'";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);

		return $row['token'];
	}

//User
	public function checkUser($email, $password = ''){
		if($password){
			$sql = "SELECT * FROM user WHERE username = '".$email."' AND password = '".$password."'";
		}else{
			$sql = "SELECT * FROM user WHERE username = '".$email."'";
		}
		$query = mysql_query($sql);

		return mysql_fetch_assoc($query);;
	}
	
	public function getUser($filter = []){
		$where = 1;
		if(isset($filter['id']) && $filter['id']) {
			$where .= " AND id = '".$filter['id']."'";
		}
		$sql = "SELECT * FROM user WHERE ".$where;
		$query = mysql_query($sql);
		while ($row = mysql_fetch_assoc($query))
		{
			$data[] = $row;
		}

		return $data;
	}

	public function createUser($data = []){
		if(!empty($data)) {
			$col = '';
			$val = '';
			foreach($data as $k => $v) {
				$col .= $k.',';
				$val .= "'".$v."',";
			}
			$col = rtrim($col, ',');
			$val = rtrim($val, ',');
			$sql = "INSERT INTO user (".$col.") VALUES (".$val.")";
			$query = mysql_query($sql);

			return $query;
		}
	}

	public function updateUser($data = [], $id){
		if(!empty($data)) {
			$val = '';
			foreach($data as $k => $v) {
				$val .= $k." = '".$v."',";
			}
			$val = rtrim($val, ',');
		}

		$sql = "UPDATE user SET ".$val." WHERE id = '".$id."'";
		$query = mysql_query($sql);

		return $query;
	}

	public function removeUser($id = ''){
		$where = 1;
		if(isset($id) && $id) {
			$where .= " AND id = '".$id."'";
		}
		$sql = "DELETE FROM user WHERE".$where;
		$query = mysql_query($sql);

		return $query;
	}

//Product
	public function getProduct($filter = []){
		$where = 1;
		if(isset($filter['id']) && $filter['id']) {
			$where .= " AND id = '".$filter['id']."'";
		}
		$sql = "SELECT * FROM product WHERE ".$where;
		$query = mysql_query($sql);
		while ($row = mysql_fetch_assoc($query))
		{
			$data[] = $row;
		}

		return $data;
	}

	public function createProduct($data = []){
		if(!empty($data)) {
			$col = '';
			$val = '';
			foreach($data as $k => $v) {
				$col .= $k.',';
				$val .= "'".$v."',";
			}
			$col = rtrim($col, ',');
			$val = rtrim($val, ',');
			$sql = "INSERT INTO product (".$col.") VALUES (".$val.")";
			$query = mysql_query($sql);

			return $query;
		}
	}

	public function updateProduct($data = [], $id){
		if(!empty($data)) {
			$val = '';
			foreach($data as $k => $v) {
				$val .= $k." = '".$v."',";
			}
			$val = rtrim($val, ',');
		}

		$sql = "UPDATE product SET ".$val." WHERE id = '".$id."'";
		$query = mysql_query($sql);

		return $query;
	}

	public function removeProduct($id = ''){
		$where = 1;
		if(isset($id) && $id) {
			$where .= " AND id = '".$id."'";
		}
		$sql = "DELETE FROM product WHERE".$where;
		$query = mysql_query($sql);

		return $query;
	}
}