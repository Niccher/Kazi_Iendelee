<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {

	public function index($page = 'home') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'home';
		$titl['urls'] = $data['user_info']->Name;
		
		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders($page = 'orders') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_pending($page = 'pending') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_completed($page = 'completed') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function orders_view($page = 'view') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function sales($page = 'sales') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'sales';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function invoices($page = 'invoices') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'invoices';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}


	public function profile($page = 'profile') {

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'profile';
		$titl['urls'] = $data['user_info']->Name;


		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/'.$page, $data);
		$this->load->view('sellers/template/tail');
	}


	public function mails($page = 'mailbox') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'mails';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/mails/'.$page);
		$this->load->view('sellers/template/tail_mail');
	}

	public function mails_read($page = 'read') {
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'mails';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/mails/'.$page);
		$this->load->view('sellers/template/tail');
	}

}
