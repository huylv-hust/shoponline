<?php

class Encrypt
{
	public $sign = 'huylv';
	public function Encode($email, $pass = '')
	{
		$info = array(
			"email" => md5($email),
			"time" => $pass ? time() + 30*60 : time() + 30*24*3600,
			"password" => $pass,
		);
		$info = json_encode($info);
		$info = base64_encode($info);
		$info = str_replace('t','H_s2_T', $info);
		$info = str_replace('h','T_s2_H', $info);
		$key = $this->Signature();
		$info = $key.$info;

		return base64_encode($info);
	}

	public function Decode($token)
	{
		$info = base64_decode($token);
		$key = $this->Signature();
		$info = str_replace($key, '', $info);
		$info = str_replace('T_s2_H', 'h', $info);
		$info = str_replace('H_s2_T', 't', $info);
		$info = base64_decode($info);

		return json_decode($info, true);
	}

	public function Signature()
	{
		$signature = array(
			"sign" => $this->sign,
		);

		return base64_encode(json_encode($signature));
	}
}
?>