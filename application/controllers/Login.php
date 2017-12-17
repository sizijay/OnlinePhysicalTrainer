<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login_view');
    }


    /**
     *
     */
    public function form()
    {


        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == False) {
            $this->load->view('login_view');
        } else {
            $this->load->model('login_model');
            $result = $this->login_model->logindata();

            if ($result != false) {
                $data = array(
                    'NIC' => $result->NIC,
                    'fname' => $result->fname,
                    'lname' => $result->lname,
                    'email' => $result->email,
                    'loggedin' => TRUE


                );
                $this->session->set_userdata($data);
                //print_r($_SESSION);
                $this->session->set_flashdata('welcome', "Welcome");

                if ($result != false) {

                        $nic = $result->NIC;


                    $this->db->select("StudentID");
                    $this->db->from('student');
                    $this->db->where('login_NIC',$nic);
                    $query = $this->db->get();
                    foreach ($query->result() as $row)
                    {
                        $id=$row->StudentID;

                    }

                    $this->db->select("attendance_Attendance_ID");
                    $this->db->from('schedule_has_student1');
                    $this->db->where('student_StudentID',$id);
                    $query = $this->db->get();
                    foreach ($query->result() as $row)
                    {
                        $attendance=$row->attendance_Attendance_ID;

                    }


                    $this->db->select("toattend_dates","attended_dates");
                    $this->db->from('attendance');
                    $this->db->where('Attendance_ID',$attendance);
                    $query = $this->db->get();
                    foreach ($query->result() as $row)
                    {
                        $toatt=$row->toattend_dates;
                        $attended=$row->attended_dates;

                    }
                    if($toatt==$attended){

                        $attended='0';
                        $this->db->set('attended_dates',$attended);
                        $this->where('Attendance_ID',$attendance);
                        $this->update('attendance');



                    }else{
                        $attended=$attended+1;
                        $this->db->set('attended_dates',$attended);
                        $this->where('Attendance_ID',$attendance);
                        $this->update('attendance');
                    }

                }

                    redirect(home);
                } else {
                    $this->session->set_flashdata('errmsg', "Wrong Email or Password");
                    redirect(login);
                }
            }
        }

    }


