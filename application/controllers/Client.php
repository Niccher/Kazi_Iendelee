<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'home';
		
		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function orders($page = 'orders') {
		
		$titl['pag'] = 'questions';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function orders_pending($page = 'pending') {
		
		$titl['pag'] = 'questions';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function orders_completed($page = 'completed') {
		
		$titl['pag'] = 'questions';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function orders_view($page = 'view') {
		
		$titl['pag'] = 'questions';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function orders_create($page = 'create') {
		
		$titl['pag'] = 'questions';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function sales($page = 'sales') {
		
		$titl['pag'] = 'analytics';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function invoices($page = 'invoices') {
		
		$titl['pag'] = 'invoices';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}


	public function profile($page = 'profile') {
		
		$titl['pag'] = 'profile';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page);
		$this->load->view('buyers/template/tail');
	}


	public function mails($page = 'mailbox') {
		
		$titl['pag'] = 'mails';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/mails/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function mails_read($page = 'read') {
		
		$titl['pag'] = 'mails';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/mails/'.$page);
		$this->load->view('buyers/template/tail');
	}

}
