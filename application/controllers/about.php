<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class about extends CI_Controller {
	public function index(){
		$this->load->view('about_view');
	}
}

?>