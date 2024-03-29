<?php
	class Mod_users extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_users(){
            //$array = array('Privilege =' => 'Client');
            //$this->db->where($array);
            $query = $this->db->get('tbl_Users');
            return $query->result_array();
        }

        public function get_users_last5(){
            $this->db->order_by('Person_ID', 'DESC');
            $this->db->limit(5);
            $query = $this->db->get('tbl_Users');
            return $query->result_array();
        }

        public function make_login($mail,$pwd){
            $this->db->where('Email', $mail);
            $this->db->where('Password', $pwd);

            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0)->Person_ID;
            }else{
                return false;
            }
        } 

        public function make_user($nw_name, $nw_eml, $nw_pwd, $nw_cat){
            $data = array(
                'Name' => ($nw_name),
                'Phone' => ('0000000000'),
                'Email' => ($nw_eml),
                'Privilege' => ($nw_cat),
                'Password' => ($nw_pwd),
                'Timestamp' => time(),
            );
            
            $msg = 'Hello '.$nw_name. ' Your account is not yet activated. Some features are therefore restricted.<br>To activate it, open the link sent to ';
            $data2 = array(
                'Timestamps' => time(),
                'Person_ID' => $nw_eml,
                'Message' => $msg,
                'Message_Type' => 'Account Activation',
            );
            $this->db->insert('tbl_Notification', $data2);

            $head1 ='Hello, <b>'.$this->mod_crypt->Dec_String($nw_name).'</b> Welcome to Kazi Mingi ';
            
            $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
            $reciva = $this->mod_crypt->Dec_String($nw_eml);
            $senda = 'admin@tendollarwriters.com-----';

            $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                        <b style="color: #777777;"></b>Thank you for joining this platform, we are pleased to have you and work with you.<br>You can get started by creating an order with us and you will for sure enjoy our services.
                    </div>';

            $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);

            return $this->db->insert('tbl_Users', $data);
        }

        public function get_vars($user_id){
            $this->db->where('Person_ID',$user_id);
            $result = $this->db->get('tbl_Users');

            if ($result->num_rows()==1) {
                return $result->row(0);
            }else{
                return false;
            }
        }
        
        public function update_profile($uuid, $image){
            $this->db->where('Phone', $uuid);
            $data = array( 'Avatar' =>  base64_encode($image));
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_profile_name($uuid, $name){
            $this->db->where('Phone', $uuid);
            $data = array( 'Name' =>  $name);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_profile_bio($uuid, $bio){
            $this->db->where('Phone', $uuid);
            $data = array( 'Bio' =>  $bio);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_verify_email($userID){
            $this->db->where('Person_ID', $userID);
            $data = array( 'Status' => 'Active' );
            return $this->db->update('tbl_Users',$data);
        }

        public function make_delete(){
            $dt = time();
            $data = array(
                'Name' => $nw_name,
                'Phone' => $nw_phone,
                'Email' => $nw_eml,
                'Password' => $nw_pwd,
                'Timestamp' => time(),
            );

            return $this->db->insert('tbl_Users_Removed', $data);
        }

        public function checkphone_exists($phone){
            $query = $this->db->get_where('tbl_Users', array('Phone'=>base64_encode($this->mod_crypt->Enc_String($phone))));

            if (empty($query->row_array())) {
                return true;
            }else{
                $this->form_validation->set_message('es_phone', 'Phone Number already exists!');
                return false;
            }
        }

        public function checkname_exists($name){
            $query = $this->db->get_where('tbl_Users', array('Name'=>base64_encode($this->mod_crypt->Enc_String($name))));

            if (empty($query->row_array())) {
                return true;
            }else{
                $this->form_validation->set_message('es_name', 'Name already exists!');
                return false;
            }
        }

        public function checkmail_exists($mail){
            $query = $this->db->get_where('tbl_Users', array('Email'=>base64_encode($this->mod_crypt->Enc_String($mail))));

            if (empty($query->row_array())) {
                return true;
            }else{
                $this->form_validation->set_message('es_mail', 'Email already exists!');
                return false;
            }
        }
	}
?>