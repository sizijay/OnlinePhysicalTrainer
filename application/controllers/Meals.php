<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class Meals extends CI_Controller {
	public function index(){
		$this->load->view('meals_view');
	}
}

?>
