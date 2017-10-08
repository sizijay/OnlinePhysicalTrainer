<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class nutrition extends CI_Controller {
	public function index(){
		$this->load->view('nutrition_view');
	}
}

?>