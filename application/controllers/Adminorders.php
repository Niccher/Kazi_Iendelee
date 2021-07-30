<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminorders extends CI_Controller {

	public function index($page = 'all') {

		$titl['pag'] = 'orders';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function pending($page = 'pending') {
		
		$titl['pag'] = 'orders';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function completed($page = 'completed') {
		
		$titl['pag'] = 'orders';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function view($page = 'view') {
		
		$titl['pag'] = 'orders';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page);
		$this->load->view('administrator/template/tail');
	}

}
