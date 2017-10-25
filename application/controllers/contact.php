<?php
if (! Defined ('BASEPATH')) 
	
exit ('No direct script access allowed');

Class contact extends CI_Controller {
	public function index(){
		$this->load->view('contact_view');
	}
	public function form(){
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Message', 'Message', 'required');

        if ($this->form_validation->run() == False){
            $this->load->view('contact_view');
        }
        else{
            $this->load->model('contact_model');
            $this->contact_model->insertdata();
        }
    }
}

?>