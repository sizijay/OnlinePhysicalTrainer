<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class register extends CI_Controller {
	public function index(){
		$this->load->view('register_view');
	}
}
?>
