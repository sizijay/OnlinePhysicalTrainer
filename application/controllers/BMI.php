<?php
if (! Defined ('BASEPATH'))

exit ('No direct script access allowed');

Class BMI extends CI_Controller {
	public function index(){
		$this->load->view('BMI_view');

	}


	public function getBMI()
    {
         $this->load->model('BMI_model');
        $respond = $this->BMI_model->getData();
        $height = $respond->height;
        $weight = $respond->weight;
        $BMI = $weight/($height*$height);
        $data = array('BMI' => $BMI);
        
         $this->load->view('BMI_view',$data);
    }


	
}
?>
