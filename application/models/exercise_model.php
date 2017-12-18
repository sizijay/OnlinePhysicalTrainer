<?php
class Exercise_model extends CI_Model
{
    public function fetch_data()
    {

        $this->db->select('schedule_schedule_no');
        $this->db->from('schedule_has_student1');
        $this->db->where('student_StudentID',13);
        $result1 = $this->db->get();
        return $result1->row();

    }
}
?>
