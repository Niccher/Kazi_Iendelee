<?php
	class Mod_users extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_users(){
            $array = array('Privilege =' => 'Client');
            $this->db->where($array);
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

        public function Enc_String( $value ) {
            $cipher_algo = "AES-128-CTR"; 

            $iv_length = openssl_cipher_iv_length($cipher_algo); 

            $options = 0; 

            $crypt_iv = '4564756651654555'; 

            $crypt_key = "�s��0F&�C�!uA�o���)Q{Ԇ\~`�ݲ)���<�M";

            $enc_val = openssl_encrypt($value, $cipher_algo, $crypt_key, $options, $crypt_iv); 
            return base64_encode(($enc_val));
        }

        public function make_user($nw_name, $nw_eml, $nw_pwd, $nw_cat){
            //$this->mod_users->make_user($rg_name , $rg_eml , $rg_pwd, $rg_type);

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
        
        public function obfuscate_email($email){
            $em   = explode("@",$email);
            $name = implode('@', array_slice($em, 0, count($em)-1));
            $len  = floor(strlen($name)/2);
        
            return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);   
        }
        
        public function otp_verify($phone,$otp){
            $this->db->where('Phone',$phone);
            $this->db->where('Otp',$otp);
            $this->db->where('Valid','TRUE');
            $times = time();
            
            $result = $this->db->get('tbl_Users_Otp');

            if ($result->num_rows()==1) {
                return $result->row(0)->Count;
            }else{
                return false;
            }
        }
        
        public function create_otp($nw_phone, $nw_eml, $otp){
            $dt = time();
            $data = array(
                'Phone' => $nw_phone,
                'Email' => $nw_eml,
                'Otp' => $otp,
                'Timestamps' => time(),
            );

            return $this->db->insert('tbl_Users_Otp', $data);
            
        }
        
        public function update_otp($count){
            $this->db->where('Count', $count);
            //$this->db->where('Timestamps + 7200 < ' , () );
            $data = array( 'Valid' => 'FALSE' , 'Tested_at' => time() );
            return $this->db->update('tbl_Users_Otp',$data);
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
        
        public function checkotp_exists($otp){
            $query = $this->db->get_where('tbl_Users_Otp', array('Otp'=>$otp));

            if (empty($query->row_array())) {
                return true;
            }else{
                return false;
            }
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