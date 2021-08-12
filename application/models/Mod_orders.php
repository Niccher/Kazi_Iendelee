<?php
	class Mod_orders extends CI_Model{

		public function __construct(){
            $this->load->database();
        }

        public function get_orders(){
            $query = $this->db->get('tbl_Orders');
            return $query->result_array();
        }

        public function get_orders_by($p_id){
            $array = array('Order_Owner =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Orders');
            return $query->result_array();

        }

        public function get_orders_id($order_id){
            $array = array('Order_Id =' => $order_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Orders');
            return $query->row_array();

        }

        public function get_attachment_size($attachment_size){
            $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            $power = $attachment_size > 0 ? floor(log($attachment_size, 1024)) : 0;
            return number_format($attachment_size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];

        }
        

        public function order_temp_upload($p_id, $file_name){
            $data = array(
                'Person_ID' => $p_id,
                'Filename' => $file_name,
                'Posted' => time(),
            );

            return $this->db->insert('tbl_Temp_Upload', $data);
        }

        public function order_get_attachments(){
            $this->db->where('Posted >=', time()-3600);
            $this->db->where('Posted <=', time()-2);
            $this->db->where('Person_ID', $this->session->userdata('log_id'));
            $this->db->order_by('Upload_Id','DESC');
            $query = $this->db->get('tbl_Temp_Upload');
            return $query->result_array();

        }

        public function orders_make($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_attachments){

            $data = array(
                'Order_Name' => $order_name,
                'Order_Body' => $order_desc,
                'Order_Pages' => $order_page,
                'Order_Words' => $order_word,
                'Order_Comment' => $order_info,
                'Order_Attachment' => $order_attachments,
                'Order_Status' => "Inactive",
                'Order_Paid' => '00',
                'Order_Owner' => $this->session->userdata('log_id'),
                'Order_Assigned' => '00',
                'Order_Accepted' => '00',
                'Order_Created' => time(),
                'Order_Deadline' => $order_date,
                'Order_Cite' => $order_cite,
                'Order_Level' => $order_level,
            );

            return $this->db->insert('tbl_Orders ', $data);
        }

        public function order_make_convo($senda, $reciva, $convo_body, $order_id){   
            $data = array(
                'Sender' => $senda,
                'Recipient' => $reciva,
                'Sent' => time(),
                'Seen' => "00",
                'Message' => $convo_body,
                'Order_Id' => $order_id,
            );

            return $this->db->insert('tbl_Chat_Orders', $data);
        }

        public function get_orders_convo_by_sender($p_id){
            $array = array('Sender =' => $p_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Chat_Orders');
            return $query->result_array();

        }

        public function get_orders_convo_by_order($order_id){
            $array = array('Order_Id =' => $order_id);
            $this->db->where($array);
            $this->db->order_by('Order_Id','ASC');
            $query = $this->db->get('tbl_Chat_Orders');
            return $query->result_array();

        }
              
	}
?>