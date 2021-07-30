Adminsales.php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'sales';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar');
		$this->load->view('administrator/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function profits($page = 'profits') {

		$titl['pag'] = 'sales';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar');
		$this->load->view('administrator/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function paid($page = 'paid') {
		
		$titl['pag'] = 'sales';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar');
		$this->load->view('administrator/'.$page);
		$this->load->view('administrator/template/tail');
	}

	public function pending($page = 'pending') {
		
		$titl['pag'] = 'sales';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar');
		$this->load->view('administrator/'.$page);
		$this->load->view('administrator/template/tail');
	}

}
