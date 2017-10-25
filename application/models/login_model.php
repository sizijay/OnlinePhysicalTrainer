<?php
class login_model extends CI_Model
{
    /**
     *
     */
    public function insertdata(){
        //login
//            $data=array('email'=>$this->input->post('Email',TRUE),
//                'NIC'=>$this->input->post('Name',TRUE)
//                );
        //contact
        $data1=array(
            'message'=>$this->input->post('Message',TRUE),
            //'student_StudentID' =>$this->input->post('Name',TRUE)

        );
        //student



        $this->db->insert('contact',$data1);
    }
}
?>