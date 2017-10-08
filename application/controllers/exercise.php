<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class exercise extends CI_Controller {
	public function index(){
		$this->load->view('exercise_view');
	}
}

?>