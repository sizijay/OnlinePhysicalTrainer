<?php
//if (! Defined ('BASEPATH')) OR exit ('No direct script access allowed');

Class Review_user extends CI_Controller {
    public function index(){
        $this->load->view('review_user');
    }
}

?>