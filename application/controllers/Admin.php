<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'home';

		$data['users_list'] = $this->mod_users->get_users();
		$data['orders_list'] = $this->mod_orders->get_orders();

		$data['users_last_5'] = $this->mod_users->get_users_last5();
		$data['orders_last_5'] = $this->mod_orders->get_orders_last5();

		$order_listing = "";

		foreach ( $data['orders_list'] as $one_order) {
			$eachyear = date('Y', $one_order['Order_Created']);
			$eachmonth = date('m', $one_order['Order_Created'])-1;
			$eachday = date('d', $one_order['Order_Created']);

			$order_listing.='
			{
                title: "'.$this->mod_crypt->Dec_String($one_order['Order_Name']).'",
                start: new Date("'.$eachyear.'", "'.$eachmonth.'", "'.$eachday.'" ),
                className: "bg-success"
            },
			';

			$data['cal'] = $order_listing;
		}

		
		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/'.$page, $data);
		$this->load->view('administrator/template/tail_home');
	}


	public function users($page = 'users') {
		
		$titl['pag'] = 'users';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page);
		$this->load->view('administrator/template/tail_users');
	}

	public function orders($page = 'questions') {
		
		$titl['pag'] = 'questions';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/questions/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function sales($page = 'sales') {
		
		$titl['pag'] = 'analytics';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/sales/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function invoices($page = '404') {
		$this->load->view('pages/template/landing');
		$this->load->view('pages/'.$page);
		$this->load->view('pages/template/landing_footer');
	}

}
