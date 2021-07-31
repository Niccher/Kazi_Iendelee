<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'home';
		
		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders($page = 'orders') {
		
		$titl['pag'] = 'questions';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_pending($page = 'pending') {
		
		$titl['pag'] = 'questions';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_completed($page = 'completed') {
		
		$titl['pag'] = 'questions';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_view($page = 'view') {
		
		$titl['pag'] = 'questions';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function sales($page = 'sales') {
		
		$titl['pag'] = 'analytics';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function invoices($page = 'invoices') {
		
		$titl['pag'] = 'invoices';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function mails($page = 'mailbox') {
		
		$titl['pag'] = 'mails';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/mails/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function mails_read($page = 'read') {
		
		$titl['pag'] = 'mails';

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/mails/'.$page);
		$this->load->view('sellers/template/tail');
	}

}
