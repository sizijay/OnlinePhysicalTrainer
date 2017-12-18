<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Reviews_admin extends CI_Controller {
	public function index(){
		$this->load->view('reviews_admin_view');
	}
}

?>