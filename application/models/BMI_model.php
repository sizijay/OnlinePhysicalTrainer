<?php

class BMI_model extends CI_Model
{
    
    public function getData()
    {
        $NIC = $this->session->userdata('NIC');
        $this->db->where('login_NIC',$NIC);
       
        $respond = $this->db->get('student');
        
        if($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }
        


        }



}
?>





































