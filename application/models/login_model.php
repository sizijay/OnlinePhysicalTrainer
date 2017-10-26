<?php
class login_model extends CI_Model
{
    /**
     *
     */
    public function logindata()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $respond=$this->db->get('login');
        if($respond->num_rows()==1){
            return($respond)->row(0);
        }else{
            return false;
        }
    }
}
?>