<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmails extends CI_Controller {

	public function index($page = 'mailbox') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

	public function inbox($page = 'inbox') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

	public function sent($page = 'sentbox') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

	public function trash($page = 'trash') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

	public function read($page = 'read') {

		$titl['pag'] = 'mails';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

}
