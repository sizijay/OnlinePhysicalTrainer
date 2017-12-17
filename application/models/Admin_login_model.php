<?php
class Admin_login_model extends CI_Model
{
    /**
     *
     */
    public function logindata()
    {
        $name=$this->input->post('name');
        $password=$this->input->post('password');

        $this->db->where('username',$name);
        $this->db->where('password',$password);
        $respond=$this->db->get('admin_login');
        if($respond->num_rows()==1){
            return($respond)->row(0);
        }else{
            return false;
        }
    }
}
?>