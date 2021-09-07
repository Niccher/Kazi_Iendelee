<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($page = 'land') {
		//$this->load->view('template/header_auth');
		$this->load->view('landing/'.$page);
		//$this->load->view('template/tail_auth');
	}

	public function error_404($page = '404') {
		$this->load->view('template/header_auth');
		$this->load->view('errors/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function error_500($page = '500') {
		$this->load->view('template/header_auth');
		$this->load->view('errors/'.$page);
		$this->load->view('template/tail_auth');
	}

}
