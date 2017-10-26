<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Login extends CI_Controller {
	public function index(){
		$this->load->view('login_view');
	}


    public function form(){


        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == False){
            $this->load->view('login_view');
        }
        else{
            $this->load->model('login_model');
            $result=$this->login_model->logindata();

            if($result != false){
                $data=array(
                 'NIC'=>$result->NIC,
                    'fname'=>$result->fname,
                    'lname'=>$result->lname,
                    'email'=>$result->email,
                    'loggedin'=>TRUE


                );
                $this->session->set_userdata($data);
                //print_r($_SESSION);
                $this->session->set_flashdata('welcome',"Welcome");
                redirect(home);
            }else{
                $this->session->set_flashdata('errmsg',"Wrong Email or Password");
                redirect(login);
            }
        }
    }

}
?>
