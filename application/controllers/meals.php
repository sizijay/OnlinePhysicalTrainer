<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class meals extends CI_Controller {
	public function index(){
		$this->load->view('meals_view');
	}
}

?>
