<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


		public function login($page = 'login'){
		
			$this->form_validation->set_rules('lg_as_eml','Email','required|trim');
	        $this->form_validation->set_rules('lg_as_pwd','Password', 'required|trim');

	        if($this->form_validation->run() === FALSE) {
	            $this->load->view('template/header_auth');
				$this->load->view('auth/'.$page);
				$this->load->view('template/tail_auth');
	        }else{

	            $lg_eml = $this->mod_crypt->Enc_String($this->input->post('lg_as_eml'));
	            $lg_pwd = $this->mod_crypt->Enc_String($this->input->post('lg_as_pwd'));

	            $user_id = $this->mod_users->make_login($lg_eml,$lg_pwd);
	            $lg_vars = $this->mod_users->get_vars($user_id);

	            $lg_name = $lg_vars->Name;
	            $lg_eml = $lg_vars->Email;
	            $user_phone = $lg_vars->Phone;
	            $user_type = $lg_vars->Privilege;
	            
	            if ($user_id) {
	                $user_logged = array(
	                    'log_mail' => $lg_eml,
	                    'log_name' => $lg_name,
	                    'log_phone' => $user_phone,
	                    'log_id' => $user_id,
	                    'log_type' => $user_type
	                );
	                $this->session->set_userdata($user_logged);

	                if($user_type == $this->mod_crypt->Enc_String('cat_Admin')){
	                	redirect('admin');
	                }
	                if($user_type == $this->mod_crypt->Enc_String('cat_Reseller')){
	                	redirect('seller');
	                }
	                if($user_type == $this->mod_crypt->Enc_String('cat_Buyer')){
	                	redirect('client');
	                }

	            }else{
	                $this->session->set_flashdata("lg_fail", "Login was unsuccesful");
	                $this->load->view('template/header_auth');
					$this->load->view('auth/'.$page);
					$this->load->view('template/tail_auth');
	            }
	            
	        }
	}

	public function register($page = 'register'){

		$this->form_validation->set_rules('rg_as_fn','Name','required|trim');
        $this->form_validation->set_rules('rg_as_eml','Email', 'required|trim');
        $this->form_validation->set_rules('rg_as_pwd','Password','required|trim');
        $this->form_validation->set_rules('cat_usertype','User type', 'required|trim');

        $data['errorcode'] = '';


        if($this->form_validation->run() === FALSE) {
            $this->load->view('template/header_auth');
			$this->load->view('auth/'.$page, $data);
			$this->load->view('template/tail_auth');
        }else{

        	$rg_name = $this->mod_crypt->Enc_String($this->input->post('rg_as_fn'));
            $rg_eml = $this->mod_crypt->Enc_String($this->input->post('rg_as_eml'));
            $rg_pwd = $this->mod_crypt->Enc_String($this->input->post('rg_as_pwd'));
            $rg_type = $this->mod_crypt->Enc_String($this->input->post('cat_usertype'));

        	$this->mod_users->make_user($rg_name , $rg_eml , $rg_pwd, $rg_type);	             
	        redirect('auth/login');
            
        }
	}

	public function logout($page = 'logout') {

		$this->session->unset_userdata('log_mail');
        $this->session->unset_userdata('log_name');
        $this->session->unset_userdata('log_phone');
        $this->session->unset_userdata('log_id');
        $this->session->unset_userdata('log_type');

		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function reset($page = 'reset') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function activate($page = 'activate') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function forgot($page = 'forgot') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function locked($page = 'locked') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

	public function home($page = 'home') {
		$this->load->view('template/header_auth');
		$this->load->view('auth/'.$page);
		$this->load->view('template/tail_auth');
	}

}
