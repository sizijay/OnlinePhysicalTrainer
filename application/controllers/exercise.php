<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class Exercise extends CI_Controller {
	public function index(){
		$this->load->view('exercise_view');
	}

	public function program(){
        $this->load->model('exercise_model');
        $this->contact_model->getdata();
    }
}

?>