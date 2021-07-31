<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login($page = 'login') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function logout($page = 'logout') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function reset($page = 'reset') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function register($page = 'register') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function activate($page = 'activate') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function forgot($page = 'forgot') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function locked($page = 'locked') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function home($page = 'home') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

}
