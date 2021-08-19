<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminusers extends CI_Controller {

	public function index($page = 'home') {

		$titl['pag'] = 'users';

		$data['user_list'] = $this->mod_users->get_users();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page, $data);
		$this->load->view('administrator/template/tail_mini');
	}

	public function buyers($page = 'buyers') {

		$titl['pag'] = 'users';

		$data['user_list'] = $this->mod_users->get_users();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page, $data);
		$this->load->view('administrator/template/tail_mini');
	}

	public function sellers($page = 'sellers') {
		
		$titl['pag'] = 'users';

		$data['user_list'] = $this->mod_users->get_users();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page, $data);
		$this->load->view('administrator/template/tail_mini');
	}


	public function view($page = 'view') {
		
		$titl['pag'] = 'users';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/users/'.$page);
		$this->load->view('administrator/template/tail_mini');
	}

	public function view_profile($uuid) {
		$user_info = $this->mod_users->get_vars($this->mod_crypt->Dec_String($uuid));
		$modal_vars = '
                <div class="card-body">
                    <div class="mt-3 text-center">
                        <img src="'.base_url("uploads/profiles/".$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'"
                            class="img-thumbnail avatar-lg rounded-circle" />
                        <h4>'.$this->mod_crypt->Dec_String($user_info->Name).', '.$this->mod_crypt->Dec_String($user_info->First_Name).'</h4>
                        <button class="btn btn-primary btn-sm mt-1">
                            <i class="uil uil-envelope-add me-1"></i>Send Email
                        </button>
                        <p class="text-muted mt-2 font-14">Last Interacted: <strong>Few hours back</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-3">
                                <hr class="" />
                                <p class="mt-4 mb-1">
                                    <strong><i class="uil uil-at"></i> Email:</strong>
                                </p>
                                <p>'.$this->mod_crypt->Dec_String($user_info->Email).'</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class="uil uil-phone"></i> Phone Number:</strong>
                                </p>
                                <p>'.($user_info->Phone).'</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                <hr class="" />
                                <p class="mt-3 mb-1"><strong>
                                    <i class="uil uil-location"></i> Privilege:</strong>
                                </p>
                                <p>'.str_replace("cat_", "",$this->mod_crypt->Dec_String($user_info->Privilege)).'</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class="uil uil-globe"></i> Joined:</strong>
                                </p>
                                <p>'.date("M d Y, H:i:s A",$user_info->Timestamp).'</p>
                            </div>
                        </div>
                        <hr class="" />
                    </div>
                    <div class="row">
                        <div class="mt-3">
                            <p class="mt-3 mb-1"><strong>
                                <i class="mdi mdi-facebook"></i> Facebook:</strong>
                            </p>
                            <p>'.$this->mod_crypt->Dec_String($user_info->Social_Fb).'</p>
                            <p class="mt-3 mb-1"><strong>
                                <i class="mdi mdi-twitter"></i> Twitter:</strong>
                            </p>
                            <p>'.$this->mod_crypt->Dec_String($user_info->Social_Tw).'</p>
                            <p class="mt-3 mb-1"><strong>
                                <i class="mdi mdi-instagram"></i> Instagram:</strong>
                            </p>
                            <p>'.$this->mod_crypt->Dec_String($user_info->Social_Ig).'</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mt-3">
                            <p class="mt-3 mb-1"><strong>
                                <i class="mdi mdi-information"></i> About:</strong>
                            </p>
                            <p>'.$this->mod_crypt->Dec_String($user_info->Bio).'</p>
                        </div>
                    </div>
                    <hr class="" />
                </div>
                ';

		echo $modal_vars;
	}

	public function send_msg($uuid) {
		$user = $this->mod_crypt->Dec_String(urldecode($_POST['prof_id']));
		$msgs = $this->mod_crypt->Enc_String($_POST['msg_content']);
		$mod = $this->mod_chats->make_chat("Admin", $user, $msgs);
		if ($mod) {
			echo "11";
		}else{
			echo "22";
		}
	}

    public function user_fetch($uuid) {
        $user = $this->mod_crypt->Dec_String(urldecode($uuid));
        $mod = $this->mod_chats->get_chats_with($user);
        $user_info = $this->mod_users->get_vars($user);
        $code_var = "";
        foreach ($mod as $chats) {
            if ($chats['Chat_Sender'] != 'Admin') {
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
    }

    public function user_prof($uuid) {
        $user_info = $this->mod_users->get_vars($this->mod_crypt->Dec_String($uuid));
        $modal_vars = '
                <div class="card-body">
                    <div class="mt-3 text-center">
                        <img src="'.base_url("uploads/profiles/".$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'"
                            class="img-thumbnail avatar-lg rounded-circle" />
                        <h4>'.$this->mod_crypt->Dec_String($user_info->Name).', '.$this->mod_crypt->Dec_String($user_info->First_Name).'</h4>
                        <button class="btn btn-primary btn-sm mt-1">
                            <i class="uil uil-envelope-add me-1"></i>Send Email
                        </button>
                        <p class="text-muted mt-2 font-14">Last Interacted: <strong>Few hours back</strong></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-3">
                                <hr class="" />
                                <p class="mt-4 mb-1">
                                    <strong><i class="uil uil-at"></i> Email:</strong>
                                </p>
                                <p>'.$this->mod_crypt->Dec_String($user_info->Email).'</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class="uil uil-phone"></i> Phone Number:</strong>
                                </p>
                                <p>'.($user_info->Phone).'</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3">
                                <hr class="" />
                                <p class="mt-3 mb-1"><strong>
                                    <i class="uil uil-location"></i> Privilege:</strong>
                                </p>
                                <p>'.str_replace("cat_", "",$this->mod_crypt->Dec_String($user_info->Privilege)).'</p>
                                <p class="mt-3 mb-1">
                                    <strong><i class="uil uil-globe"></i> Joined:</strong>
                                </p>
                                <p>'.date("M d Y, H:i:s A",$user_info->Timestamp).'</p>
                            </div>
                        </div>
                        <hr class="" />
                    </div>

                    <div class="row">
                        <div class="mt-3">
                            <p class="mt-3 mb-1"><strong>
                                <i class="mdi mdi-information"></i> About:</strong>
                            </p>
                            <p>'.$this->mod_crypt->Dec_String($user_info->Bio).'</p>
                        </div>
                    </div>
                    <hr class="" />
                </div>
                ';

        echo $modal_vars;
    }

}
