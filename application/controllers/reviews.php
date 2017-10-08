<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class reviews extends CI_Controller {
	public function index(){
		$this->load->view('reviews_view');
	}
}

?>