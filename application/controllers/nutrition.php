<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Nutrition extends CI_Controller {
	public function index(){
		$this->load->view('nutrition_view');
	}
}

?>
