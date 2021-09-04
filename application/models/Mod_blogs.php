<?php
	class Mod_blogs extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_blogs(){
            $query = $this->db->get('tbl_Blogs');
            return $query->result_array();
        }

        public function get_blog_by($p_id){
            $this->db->where('Blog_Id', $p_id); 
            $result = $this->db->get('tbl_Blogs');
            if ($result->num_rows()==1) {
                return $result->row(0);
            }else{
                return false;
            }
        }

        public function make_blog($bl_title, $bl_content){
            //Blog_Id   Blog_Title  Blog_Body   Blog_Time   Blog_Views  Blog_Author 
            $data = array(
                'Blog_Title' => $bl_title,
                'Blog_Body' => $bl_content,
                'Blog_Time' => time(),
                'Blog_Views' => "00",
                'Blog_Author' => "Admin",
            );

            return $this->db->insert('tbl_Blogs', $data);
        }

	}
?>