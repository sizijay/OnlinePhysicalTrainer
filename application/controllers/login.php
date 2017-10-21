<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class login extends CI_Controller {
	public function index(){
		$this->load->view('login_view');
	}
}
?>
