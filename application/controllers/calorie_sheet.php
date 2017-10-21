<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class calorie_sheet extends CI_Controller {
	public function index(){
		$this->load->view('calorie_sheet_view');
	}
}

?>
