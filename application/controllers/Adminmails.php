<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmails extends CI_Controller {

	public function index($page = 'mailbox') {

		$titl['pag'] = 'mails';

		$data['chat_list'] = $this->mod_chats->get_sent_by('Admin');

		$result = array(); $index = array(); $active_chats = array();

		foreach(array_reverse($data['chat_list']) as $i => $elem) {
			if(!isset($index[$elem['Chat_Receiver']])) {
				$result[$i] = $elem;
				array_push($active_chats, $elem['Chat_Receiver']);
				$index[$elem['Chat_Receiver']] = 1;
			}
		}

		$Aactive_msg = "";

		foreach ($active_chats as $user) {
			$user_infos = $this->mod_users->get_vars($user);
			$user_name = $this->mod_crypt->Dec_String($user_infos->Name);

			$user_id = $this->mod_crypt->Enc_String($user_infos->Person_ID);

			$user_chat = $this->mod_chats->get_last_action_by($user);
			$chate = $this->mod_crypt->Dec_String($user_chat[0]['Chat_Body']);

			$unread = count($this->mod_chats->get_count_unread($user));

			$Aactive_msg .= '
				<a href="javascript:void(0);" class="text-body">
	                <div class="d-flex align-items-start user_mailing_list bg-light p-2" id="active_usars_'.urlencode($user_id).'">
	                    <img src="'.base_url("uploads/profiles/".$user_infos->Avatar).'" class="me-2 rounded-circle" height="40" alt="'.$user_name.'" />
	                    <div class="w-100 overflow-hidden">
	                        <h5 class="mt-0 mb-0 font-14">
	                            <span class="float-end text-muted font-12">'.date("M d, H:i A", $user_chat[0]['Chat_Sent']).'</span>
	                            '.ucfirst($user_name).'
	                        </h5>
	                        <p class="mt-1 mb-0 text-muted font-14">
	                        	<span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">'.$unread.'</span></span>
	                            <span class="w-75">'.$chate.'</span>
	                        </p>
	                    </div>
	                </div>
	            </a>
	            <br>
			';

		}

		$data['Aactive_msg'] = $Aactive_msg;


		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/mails/'.$page, $data);
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
