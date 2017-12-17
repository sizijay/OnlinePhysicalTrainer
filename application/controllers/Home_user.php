<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	


Class Home_user extends CI_Controller {
	public function index(){
		$this->load->view('home_user_view');
	}
}

