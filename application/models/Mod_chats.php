<?php
	class Mod_chats extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_posts(){
            $query = $this->db->get('tbl_Posts');
            return $query->result_array();
        }

        public function get_sent_by($p_id){
            $this->db->where('Chat_Sender', $p_id); 
            $query = $this->db->get('tbl_Chats');
            return $query->result_array();
        }

        public function get_last_action_by($p_id){
            $this->db->order_by("Chat_Id", "DESC");
            $this->db->where('Chat_Receiver', $p_id);
            $this->db->limit(1);
            $query = $this->db->get('tbl_Chats');
            return $query->result_array();
        }

        public function get_count_unread($p_id){
            $this->db->where('Chat_Receiver', $p_id);
            $this->db->where('Chat_Read', "00");
            $query = $this->db->get('tbl_Chats');
            return $query->result_array();
        }

        public function get_chats_with($p_id){
            
            $this->db->group_start();
            $this->db->or_where('Chat_Receiver',$p_id);
            $this->db->or_where('Chat_Sender',$p_id);
            $this->db->group_end();


            $query = $this->db->get('tbl_Chats');
            return $query->result_array();
        }

        public function make_chat($cht_owner, $cht_reciva, $cht_content){
            $data = array(
                'Chat_Sender' => $cht_owner,
                'Chat_Receiver' => $cht_reciva,
                'Chat_Sent' => time(),
                'Chat_Viewed' => "00",
                'Chat_Body' => $cht_content,
                'Chat_Read' => "00",
            );

            return $this->db->insert('tbl_Chats', $data);
        }

	}
?>