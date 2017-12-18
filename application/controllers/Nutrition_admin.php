<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Nutrition_admin extends CI_Controller {
	public function index(){
		$this->load->view('nutrition_admin_view');
	}
}

?>
