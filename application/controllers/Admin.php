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
		}

		$data['cal'] = $order_listing;

		
		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/'.$page, $data);
		$this->load->view('administrator/template/tail_home');
	}

	public function sales($page = 'sales') {
		
		$titl['pag'] = 'analytics';

		$data['assigned'] = $this->mod_orders->get_all_assigned();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/sales/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function invoices($page = 'invoices') {

		$titl['pag'] = 'analytics';

		$data['url'] =  $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
		$data['assigned'] = $this->mod_orders->get_all_assigned_to($data['url']);

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/sales/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

}
