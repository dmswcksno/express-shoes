<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/auth/login');
        $this->load->view('administrator/templates/footer');
	}
}
