<?php

class Membership_model extends CI_Model
{
	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('membership');

		if($query->num_rows == 1)
		{
			return true;
		}	
		else
		{
			return false;
		}
	}

}

 
?>