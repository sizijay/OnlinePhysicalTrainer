<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Reviews extends CI_Controller {
	public function index(){
		$this->load->view('reviews_view');
	}
}

?>