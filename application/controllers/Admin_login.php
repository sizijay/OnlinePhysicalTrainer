<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Admin_login extends CI_Controller {
	public function index(){
		$this->load->view('admin_login_view');
	}


    public function form(){


        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == False){
            $this->load->view('admin_login_view');
        }
        else{
            $this->load->model('admin_login_model');
            $result=$this->admin_login_model->logindata();

            if($result != false){
                $data=array(
                 'username'=>$result->username,
                    'loggedin'=>TRUE


                );
                $this->session->set_userdata($data);
                //print_r($_SESSION);
                $this->session->set_flashdata('welcome',"Welcome");

                redirect('exercise_admin');

            }else{
                $this->session->set_flashdata('errmsg',"Wrong Email or Password");
                redirect('admin_login');
            }
        }
    }

}
?>
