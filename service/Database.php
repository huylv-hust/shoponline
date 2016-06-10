<?php

class Database {
	public function __construct()
	{
		$conn = mysql_connect("localhost", "root", "") or die("Not connect!");
		mysql_select_db("service",$conn);
	}

	public function Regist($email, $name, $token){
		$sql = "INSERT INTO regist (email, name, token) VALUES ('".$email."', '".$name."','".$token."')";
		$query = mysql_query($sql);

		return $query;
	}

	public function Update($email, $name, $token){
		$sql = "UPDATE regist SET email = '".$email."',name = '".$name."',token = '".$token."'";
		$query = mysql_query($sql);

		return $query;
	}
	
	public function CheckRegist($email){
		$sql = "SELECT * FROM regist WHERE email = '".$email."'";
		$query = mysql_query($sql);
		$token = '';

		while($row = mysql_fetch_array($query)) {
			$token = $row['token'];
		}
		return $token;
	}

	public function CheckUser($email, $password){
		$sql = "SELECT * FROM user WHERE username = '".$email."' AND password = '".$password."'";
		$query = mysql_query($sql);
		
		return $query;
	}
	
	public function getUser($data = []){
		$where = 1;
		$sql = "SELECT * FROM user WHERE ".$where;
		$query = mysql_query($sql);
		while ($row = mysql_fetch_assoc($query))
		{
			$data[] = $row;
		}
		
		return $data;
	}
}