<?php
	class Mod_posts extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_posts(){
            $query = $this->db->get('tbl_Posts');
            return $query->result_array();
        }

        public function get_posts_by($p_id){
            $array = array('Person_ID =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Posts');
            return $query->result_array();
        }

        public function make_post($post_owner, $post_content){

            $data = array(
                'Person_ID' => $post_owner,
                'Body' => $post_content,
                'Published' => '00',
                'Posted' => time(),
            );

            return $this->db->insert('tbl_Posts', $data);
        }


	}
?>