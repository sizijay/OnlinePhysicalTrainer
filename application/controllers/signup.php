<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class signup extends CI_Controller {
	public function index(){
		$this->load->view('signup_view');
	}

	public function RegisterUser(){
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('age','Age','required');
		$this->form_validation->set_rules('height','Height','required');
		$this->form_validation->set_rules('weight','Weight','required');
		$this->form_validation->set_rules('cnumber','Contact Number','required');		
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('nic','NIC No.','required|is_unique[login.NIC]|is_unique[student.NIC]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('signup_view');
		}

		else{
			$this->load->model('signup_Model');
			$this->signup_Model->insertUserdata();
		}

	}
}
?>
