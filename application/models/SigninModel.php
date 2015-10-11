<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SigninModel extends CI_Cntroller
{

	public function getEmployee($form)
	{
		$sql = "SELECT count(*) from test where firstame = $data[0] AND email = $data[1]";
		$result = $this->db->query($sql);
		return $result;
	}
}

?>