<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function register(){

    	$rg_eml = $this->mod_crypt->Enc_String($this->input->post('reg_name'));

    	$rg_pwd = random_string('alnum', 8);
    	$rg_data = explode("@", $this->input->post('reg_name'));

        $rg_name = $this->mod_crypt->Enc_String($rg_data[0]);
        $rg_type = $this->mod_crypt->Enc_String('cat_Buyer');

    	$this->mod_users->make_user($rg_name , $rg_eml , $rg_pwd, $rg_type);

    	$head1 ='Hello, '.$rg_name.' Welcome to Kazi Mingi ';
        
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $this->input->post('reg_name');
        $senda = 'admin@tendollarwriters.com-----';
        $pass_word = $rg_pwd;

		$more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>Thank you for joining this platform, we are pleased to have you and work with you.<br>You can get started by creating an order with us and you will for sure enjoy our services.
                    Please use <b>'.$this->input->post('reg_name').'</b> as your username<br> and <b>'.$pass_word.'</b> as your password.;
                </div>';        

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);  


        $user_id = $this->mod_users->make_login($rg_eml,$rg_pwd);
        $lg_vars = $this->mod_users->get_vars($user_id);
        
        if ($user_id) {
        	$lg_name = $lg_vars->Name;
            $lg_eml = $lg_vars->Email;
            $user_phone = $lg_vars->Phone;
            $user_type = $this->mod_crypt->Dec_String($lg_vars->Privilege);

            $user_logged = array(
                'log_mail' => $lg_eml,
                'log_name' => $lg_name,
                'log_phone' => $user_phone,
                'log_id' => $user_id,
                'log_type' => $user_type
            );
            $this->session->set_userdata($user_logged);

        }

        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($lg_name))); 

    	if($user_type == 'cat_Buyer'){
        	redirect('buyer/'.$user_url.'/orders/add');
        }
	}

}
