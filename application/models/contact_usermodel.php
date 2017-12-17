<?php
/**
 * Created by PhpStorm.
 * User: Uddeepa Wijerathna
 * Date: 10/22/2017
 * Time: 4:28 PM
 */

class Contact_usermodel extends CI_Model
{
    /**
     *
     */
    public function insertdat()
    {


        //login
//            $data=array('email'=>$this->input->post('Email',TRUE),
//                'NIC'=>$this->input->post('Name',TRUE)
//                );
        //contact
        $data1 = array(

            'message' => $this->input->post('Message', TRUE),
            'student_StudentID' => $this->input->post('Name', TRUE)


        );

        // $query = $this->db->query('SELECT StudentID FROM student');

        //foreach ($query->result_array() as $row) {
        //if (!empty(data1(1))) {
        // if ($row['StudentID'] == data1(1)) {
//        $data=array(
//            'message'=>$result->message,
//            'student_StudentID'=>$result->student_StudentID,
//
//        );
        $this->db->insert("contact", $data1);
        echo "successfully inserted";
        //}
    }

    //}

    //}
    public function insertdata()
    {
        $message = $this->input->post('Message');
        $student_StudentID = $this->input->post('Name');
        $email = $this->input->post('Email');


        //$this->db->where('email',$email);
        //$respond1=$this->db->get('login');
        $this->db->where('StudentID', $student_StudentID);
        $respond = $this->db->get('student');
        if ($respond->num_rows() == 1) {
            return($respond)->row(0);
        }
        else{
            return false;
        }
    }



}
?>





































