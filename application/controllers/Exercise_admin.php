<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class Exercise_admin extends CI_Controller {
	public function index(){
		$this->load->view('exercise_admin-view');
	}
}

?>
