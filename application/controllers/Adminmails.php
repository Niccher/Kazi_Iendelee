<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmails extends CI_Controller {

	public function index($page = 'mailbox') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function read($page = 'read') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail');
	}

}
