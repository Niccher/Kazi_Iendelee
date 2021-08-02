<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($page = 'landing') {
		$this->load->view('template/header_auth');
		$this->load->view('landing/'.$page);
		$this->load->view('template/tail_auth');
	}

}
