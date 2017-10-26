<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class Meals_admin extends CI_Controller {
	public function index(){
		$this->load->view('meals_admin_view');
	}
}

?>
