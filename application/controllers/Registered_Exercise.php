<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Registered_Exercise extends CI_Controller {
	public function index(){


		$this->load->model('exercise_model');
		$result = $this->exercise_model->fetch_data();
		$data['id']=$result->schedule_schedule_no;


		$this->load->view('registered_exercise_view',$data);




	}
}



?>
