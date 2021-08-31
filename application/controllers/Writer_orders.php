<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writer_orders extends CI_Controller {

	public function orders($page = 'orders') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['assigned'] = $this->mod_orders->get_all_assigned_to($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page, $data);
		$this->load->view('sellers/template/tail');
	}

	public function orders_pending($page = 'pending') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['assigned'] = $this->mod_orders->get_all_assigned_to($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page, $data);
		$this->load->view('sellers/template/tail');
	}

	public function orders_completed($page = 'completed') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['assigned'] = $this->mod_orders->get_all_assigned_to($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page, $data);
		$this->load->view('sellers/template/tail');
	}

	public function orders_view($page = 'view') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));

		
		$titl['pag'] = 'orders';
		$titl['urls'] = $data['user_info']->Name;

		$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));
		$data['order_info'] = $this->mod_orders->get_orders_id($uuid);
		$data['order_chats'] = $this->mod_orders->get_orders_convo_by_order($uuid);

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/orders/'.$page, $data);
		$this->load->view('sellers/template/tail');
	}

	public function make_accept() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));

		$keyword = (urldecode($this->uri->segment(4)));
		$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));
		$emailer = $this->mod_crypt->Dec_String($this->session->userdata('log_mail'));
		$senda = $emailer.'-----';

		if ($keyword == "accept") {
			$ass_reply = "11";
			$head1 ='Order Accepted';
            
            $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
            $reciva = $this->mod_crypt->Dec_String($nw_eml);

            $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                        <b style="color: #777777;"></b>Order <b>'.$uuid.'</b> has been accepted by the writer.
                    </div>';

		}
		if ($keyword == "reject") {
			$ass_reply = "22";
			$head1 ='Order Rejected';
            
            $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
            $reciva = $this->mod_crypt->Dec_String($nw_eml);

            $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                        <b style="color: #777777;"></b>Order <b>'.$uuid.'</b> has been rejected by the writer.
                    </div>';

		}

        $this->mod_emails->mail_this($senda, 'admin@tendollarwriters.com', $more, $head, $head1);
		$this->mod_orders->get_assigned_update($ass_reply, $uuid);

		$user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    redirect('writer/'.$user_url.'/profile');
	}

	public function orders_get_attachment() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;


		$filename = urldecode($this->uri->segment(5));
		$filepath = 'uploads/orders/'.$filename;
		force_download($filepath, NULL);

	}

}
