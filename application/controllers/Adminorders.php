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
		if (empty($data['orders_info'])) {
			redirect('admin/orders');
		}
		$data['user_list'] = $this->mod_users->get_users();
		$data['assign_list'] = $this->mod_orders->get_assigned_to($word_id);

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

	public function assign($page = 'view') {
		
		$titl['pag'] = 'orders';

		$word_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$orders_info = $this->mod_orders->get_orders_id($word_id);

		$price = $_POST['assigned_price'];
		$writer = $this->mod_crypt->Dec_String(urldecode($_POST['assigned_writer']));

		if (!empty($orders_info)) {
			if ($_POST['assigned_price'] == "" || $_POST['assigned_price'] == NULL) {
				$price = $orders_info->Order_Cost;
			}
		}	

		$user_info = $this->mod_users->get_vars($writer);
		$user_info_name = $this->mod_crypt->Dec_String($user_info->Name);
		$user_info_mail = $this->mod_crypt->Dec_String($user_info->Email);

		$this->mod_orders->make_assign($writer, $word_id);

		$head1 ='Hello, <b>'.$user_info_name.'</b> New assignment.';
            
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $user_info_mail;
        $senda = 'admin@tendollarwriters.com-----';

        $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>You have been assigned some work by the administrator, please log into the website to see the work.
                </div>';

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);

		redirect('orders/view/'.$this->uri->segment(3));
	}

}
