<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class About extends CI_Controller {
	public function index(){
		$this->load->view('about_view');
	}
}

?>