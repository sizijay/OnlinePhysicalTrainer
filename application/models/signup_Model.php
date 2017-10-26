<?php 

Class Signup_model extends CI_Model {
	function insertUserdata(){
		$dataL = array(

			'NIC' => $this->input->post('nic',TRUE),
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),						
			'contactno' => $this->input->post('cnumber',TRUE),
			'address' => $this->input->post('address',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))
			);

		$this->db->insert('login',$dataL);

		$dataS = array(
			'login_NIC' => $this->input->post('nic',TRUE),
			'weight' => $this->input->post('weight',TRUE),
			'height' => $this->input->post('height',TRUE),
			'age' => $this->input->post('age',TRUE),
			);
		
		$this->db->insert('student',$dataS);


	}
}

?>