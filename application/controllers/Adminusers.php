<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminusers extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'users';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function buyers($page = 'buyers') {

		$titl['pag'] = 'users';

		$data['user_list'] = $this->mod_users->get_users();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function sellers($page = 'sellers') {
		
		$titl['pag'] = 'users';

		$data['user_list'] = $this->mod_users->get_users();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}


	public function view($page = 'view') {
		
		$titl['pag'] = 'users';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page);
		$this->load->view('administrator/template/tail');
	}

}
