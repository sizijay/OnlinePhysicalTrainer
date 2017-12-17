<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Registered_Exercise extends CI_Controller {
	public function index(){
		$this->load->view('registered_exercise_view');
	}
}

?>
