<?php
	class Mod_client extends CI_Model{

		public function __construct(){
            $this->load->database();
        }
        
        public function update_profile_fname($p_id, $new_fname){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'First_Name' =>  $new_fname);
            return $this->db->update('tbl_Users',$data);
        }
        
        public function update_profile_lname($p_id, $new_lname){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Last_Name' =>  $new_lname);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_bio($p_id, $bio){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Bio' =>  $bio);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_email($p_id, $new_email){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Email' =>  $new_email);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_pwd($p_id, $new_pwd){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Password' =>  $new_pwd);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_fb($p_id, $new_fb){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Social_Fb' =>  $new_fb);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_tw($p_id, $new_tw){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Social_Tw' =>  $new_tw);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_ig($p_id, $new_ig){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Social_Ig' =>  $new_ig);
            return $this->db->update('tbl_Users',$data);
        }

        public function update_profile_avatar($p_id, $new_img){
            $this->db->where('Person_ID', $p_id);
            $data = array( 'Avatar' =>  $new_img);
            return $this->db->update('tbl_Users',$data);
        }
        
	}
?>