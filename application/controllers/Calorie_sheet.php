<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Calorie_sheet extends CI_Controller {
	public function index(){
		$this->load->view('calorie_sheet_view');
	}
}

?>
