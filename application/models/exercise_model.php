<?php
class Exercise_model extends CI_Model
{
    public function fetch_data()
    {
        $this->db->select->('schedule_no');
        $result1 = $this->db->get('schedule');
        return $result1;

    }
}
?>
