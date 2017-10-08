<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class home extends CI_Controller {
	public function index(){
		$this->load->view('home_view');
	}
}

?>