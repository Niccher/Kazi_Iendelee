<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminorders extends CI_Controller {

	public function index($page = 'all') {

		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function pending($page = 'pending') {
		
		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function completed($page = 'completed') {
		
		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function view($page = 'view') {
		
		$titl['pag'] = 'orders';

		$word_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$data['orders_info'] = $this->mod_orders->get_orders_id($word_id);

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail');
	}

	public function orders_get_attachment() {
		
		$filename = urldecode($this->uri->segment(4));
		$filepath = 'uploads/temp_orders/'.$filename;
		force_download($filepath, NULL);
	}

}
