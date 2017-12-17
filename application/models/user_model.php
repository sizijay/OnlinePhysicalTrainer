<?php
/**
 * Created by PhpStorm.
 * User: Uddeepa Wijerathna
 * Date: 10/22/2017
 * Time: 4:28 PM
 */

class user_model extends CI_Model
{
    
    public function insertdata()
    {
        $dataL = array(

           
            'review' => $this->input->post('review',TRUE),
            
            );

        $this->db->insert('review',$dataL);



}
}
?>





































