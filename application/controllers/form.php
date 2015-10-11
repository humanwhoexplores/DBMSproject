<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_CONTROLLER{

	public function index()
	{
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation','encrypt');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view->('myform');
		}
		else
		{
			
			$this->load->view('formsuccess');
		}
				
	}

}
?>