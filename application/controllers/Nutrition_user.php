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

//    public function open(){
//        $id=$this->input->get('btn_sub');
//        $this->load->model('nutrition_model');
//        $data2=$this->nutrition_model->open2($id);

       //$this->load->view("nutritionplan_userview",$data2);

    //}

}

?>