<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller {

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

	public function sales($page = 'sales') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'sales';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function invoices($page = 'invoices') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'invoices';
		$titl['urls'] = $data['user_info']->Name;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/sales/'.$page);
		$this->load->view('sellers/template/tail');
	}

	public function mails($page = 'mailbox') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'mails';
		$titl['urls'] = $data['user_info']->Name;

		$mod = $this->mod_chats->get_chats_with($this->session->userdata('log_id'));
    	$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));

    	$code_var = "";
        foreach ($mod as $chats) {
            if ($chats['Chat_Sender'] == $this->session->userdata('log_id')) {
                $code_var .= '
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="'.base_url('uploads/profiles/'.$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'" class="rounded" />
                            <i>'.date('d H:i',$chats['Chat_Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>'.$this->mod_crypt->Dec_String($user_info->Name).':</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($chats['Chat_Body']).'
                                </p>
                            </div>
                        </div>
                    </li>
                    ';
            }else{
                $code_var .= '
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="'.base_url('assets/images/waves.png').'" alt="Admin:" class="rounded" />
                            <i>'.date('d H:i',$chats['Chat_Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>Admin:</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($chats['Chat_Body']).'
                                </p>
                            </div>
                        </div>
                    </li>
                    ';
            }
    	}

    	$data['msgs'] = $code_var;

		$this->load->view('sellers/template/header');
		$this->load->view('sellers/template/sidebar', $titl);
		$this->load->view('sellers/mails/'.$page, $data);
		$this->load->view('sellers/template/tail_chat');
	}

	public function send_message() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Reseller") {
            redirect('auth/login');
        }
		
		$user_id = $this->session->userdata('log_id');
		$url_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));

		if ($user_id == $url_id) {
			$msgs = $this->mod_crypt->Enc_String($_POST['msg_content']);
			$mod = $this->mod_chats->make_chat($user_id, "Admin", $msgs);
			echo "11";

		}else{
			echo "22";
		}
	}

	public function user_fetch() {
        $user_id = $this->session->userdata('log_id');
		$url_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));

		if ($user_id == $url_id) {
			$mod = $this->mod_chats->get_chats_with($user_id);
        	$user_info = $this->mod_users->get_vars($user_id);

        	$code_var = "";
	        foreach ($mod as $chats) {
	            if ($chats['Chat_Sender'] == $this->session->userdata('log_id')) {
	                $code_var .= '
	                    <li class="clearfix odd">
	                        <div class="chat-avatar">
	                            <img src="'.base_url('uploads/profiles/'.$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'" class="rounded" />
	                            <i>'.date('d H:i',$chats['Chat_Sent']).'</i>
	                        </div>
	                        <div class="conversation-text">
	                            <div class="ctext-wrap">
	                                <i>'.$this->mod_crypt->Dec_String($user_info->Name).':</i>
	                                <p>
	                                    '.$this->mod_crypt->Dec_String($chats['Chat_Body']).'
	                                </p>
	                            </div>
	                        </div>
	                    </li>
	                    ';
	            }else{
	                $code_var .= '
	                    <li class="clearfix">
	                        <div class="chat-avatar">
	                            <img src="'.base_url('assets/images/waves.png').'" alt="Admin:" class="rounded" />
	                            <i>'.date('d H:i',$chats['Chat_Sent']).'</i>
	                        </div>
	                        <div class="conversation-text">
	                            <div class="ctext-wrap">
	                                <i>Admin:</i>
	                                <p>
	                                    '.$this->mod_crypt->Dec_String($chats['Chat_Body']).'
	                                </p>
	                            </div>
	                        </div>
	                    </li>
	                    ';
	            }
        	}

        	echo $code_var;

		}else{
			echo "11";
		}
    }

}
