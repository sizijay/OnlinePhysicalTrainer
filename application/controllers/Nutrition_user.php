<?php

if (! Defined ('BASEPATH'))

    exit ('No direct script access allowed');


Class Nutrition_user extends CI_Controller
{
    public function index()
    {

        $this->load->model('nutrition_model');
        $data["fetch_data"]=$this->nutrition_model->fetch_data();
        $this->load->view("nutritionplan_userview",$data);
    }



}

?>