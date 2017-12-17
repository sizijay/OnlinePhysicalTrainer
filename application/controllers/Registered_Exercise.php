<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Registered_Exercise extends CI_Controller {
	public function index(){


		$this->load->model('exercise_model');
		$result = $this->exercise_model->training_schedule();
		$data1['id']=$result;


		$this->load->view('registered_exercise_view',$data);




	}
}



?>
