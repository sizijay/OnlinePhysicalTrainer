<?php
if (! Defined ('BASEPATH'))

    exit ('No direct script access allowed');

Class Exercise_user extends CI_Controller {
    public function index()
    {

        $this->load->model('exercise_model');
        $data["fetch_data"]=$this->exercise_model->fetch_data();
        $this->load->view("exercise_user",$data);
    }

    public function program(){
        $this->load->model('exercise_model');
        $this->contact_model->getdata();
    }
}

?>