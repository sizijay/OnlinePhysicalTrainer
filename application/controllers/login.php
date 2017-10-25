<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class login extends CI_Controller {
	public function index(){
		$this->load->view('login_view');
	}

    public function form(){
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == False){
            $this->load->view('contact_view');
        }
        else{
            $this->load->model('login_model');
            $this->login_model->insertdata();
        }
    }
}

?>
