<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'home';
		
		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function dashboard($page = 'dashboard') {

		$titl['pag'] = 'home';

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar' , $titl);
		$this->load->view('admin/'.$page);
		$this->load->view('template_admin/tail');
	}

	public function users($page = 'users') {
		
		$titl['pag'] = 'users';

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar' , $titl);
		$this->load->view('admin/users/'.$page);
		$this->load->view('template_admin/tail');
	}

	public function orders($page = 'questions') {
		
		$titl['pag'] = 'questions';

		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar' , $titl);
		$this->load->view('admin/questions/'.$page);
		$this->load->view('template_admin/tail');
	}

	public function sales($page = 'sales') {
		
		$titl['pag'] = 'analytics';

		$this->load->view('template_admin/header2');
		$this->load->view('template_admin/sidebar' , $titl);
		$this->load->view('admin/sales/'.$page);
		$this->load->view('template_admin/tail2');
	}

	public function invoices($page = '404') {
		$this->load->view('pages/template/landing');
		$this->load->view('pages/'.$page);
		$this->load->view('pages/template/landing_footer');
	}

}
