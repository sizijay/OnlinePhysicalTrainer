<?php 

Class Signup_model extends CI_Model {
	function insertUserdata(){
		$dataL = array(

			'NIC' => $this->input->post('nic',TRUE),
			'fname' => $this->input->post('fname',TRUE),
			'lname' => $this->input->post('lname',TRUE),						
			'contactno' => $this->input->post('cnumber',TRUE),
			'address' => $this->input->post('address',TRUE),
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password',TRUE))
			);

		$this->db->insert('login',$dataL);

		$dataS = array(
			'login_NIC' => $this->input->post('nic',TRUE),
			'weight' => $this->input->post('weight',TRUE),
			'height' => $this->input->post('height',TRUE),
			'age' => $this->input->post('age',TRUE),
			);
		
		$this->db->insert('student',$dataS);

        $nic=$this->input->post('nic');


        $this->db->select("StudentID");
        $this->db->from('student');
        $this->db->where('login_NIC',$nic);
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            $id=$row->StudentID;

        }
        //print $row;

        $data3=array(
            'nutrition_plan_n_no' => '1',
            'student_StudentID'=> $id

        );
        $this->db->insert('nutrition_plan_has_student',$data3);

        $data4=array(
            'schedule_schedule_no'=>'1',
            'attendance_Attendance_ID'=>'1',
            'student_StudentID'=> $id
        );
        $this->db->insert('schedule_has_student1',$data4);

	}
}

?>