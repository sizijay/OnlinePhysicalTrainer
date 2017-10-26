<?php
/**
 * Created by PhpStorm.
 * User: Uddeepa Wijerathna
 * Date: 10/26/2017
 * Time: 3:16 PM
 */

class exercise_model extends CI_Model
{
    public function getdata(){
        $query=$this->db->get("training_program");
        return $query;
        $data['records']=$query->result();
        $this->load->view('exercise_view',$data);
    }
}