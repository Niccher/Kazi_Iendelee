<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

		$titl['pag'] = 'home';

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));
		//$data['user_msgs'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page, $data);
		$this->load->view('buyers/template/tail');

	}


	public function sales($page = 'sales') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'sales';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function invoices($page = 'invoices') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'invoices';

		$this->load->view('buyers/template/header');
		//$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function add_post() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		$post_body = (trim($this->input->post('new_post')));


	    if (isset($post_body) && $post_body != '') {
	    	print('<br>post_body $'. $post_body.'$');
	    	$this->mod_posts->make_post($person_id, $this->mod_crypt->Enc_String($post_body));
	    }

	    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    redirect('buyer/'.$user_url.'/profile');
	}

	public function mails($page = 'mailbox') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'mails';

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

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/mails/'.$page, $data);
		$this->load->view('buyers/template/tail_mini');
	}

	public function send_message() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
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
