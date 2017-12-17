<?php
if (! Defined ('BASEPATH'))

    exit ('No direct script access allowed');


Class Contact_user extends CI_Controller
{
    public function index()
    {
        $this->load->view('contact_user');
    }

    public function form()
    {
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('Message', 'Message', 'required');

        if ($this->form_validation->run() == False) {

            $this->load->view('contact_user');
        } else {
            $this->load->model('contact_model');
            $result = $this->contact_model->insertdata();
            //print_r($result);
            if ($result) {

                $this->load->model('contact_model');
                $this->contact_model->insertdat();
                echo '<script language="javascript">';
                echo 'alert("Message successfully sent !")';
                echo '</script>';
                $this->load->view('contact_user');
            }
            else{
                //$this->session->set_flashdata('errmsg',"Invalid StudentID");
                echo '<script language="javascript">';
                echo 'alert("Please enter a valid Student ID !")';
                echo '</script>';
                $this->load->view('contact_user');
                //$this->session->flashdata('errmsg');
            }
        }
    }



}
?>