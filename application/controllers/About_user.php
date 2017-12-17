<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class About_user extends CI_Controller {
    public function index(){
        $this->load->view('about_user');
    }
}

?>