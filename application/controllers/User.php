<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class User extends CI_Controller {
	public function index(){
		$this->load->view('user_view');
	}

	public function form()
    {
        
        
        $this->form_validation->set_rules('review', 'review', 'required');

        if ($this->form_validation->run() == False) {
            $this->load->view('user_view');
        } else {
            $this->load->model('user_model');
            $this->user_model->insertdata();
            $this->load->view('user_view');
            
            }
        
    }

	
}
?>
