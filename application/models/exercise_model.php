<?php
class Exercise_model extends CI_Model
{
    public function fetch_data()
    {
        $query = $this->db->get("training_program");
        return $query;
    }
}
?>