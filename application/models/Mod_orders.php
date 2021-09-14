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

        public function get_paid(){
            /*$order_id = $this->mod_crypt->Dec_String(urldecode($p_id));
            $array = array('Order_Owner =' => $p_id);
            $this->db->where($array);*/
            $query = $this->db->get('tbl_Stripe');
            return $query->result_array();

        }

        public function get_orders_last5(){
            $this->db->order_by('Order_Id', 'DESC');
            $this->db->limit(5);
            $query = $this->db->get('tbl_Orders');
            return $query->result_array();
        }

        public function get_orders_id($order_id){
            $array = array('Order_Id =' => $order_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Orders');
            return $query->row_array();

        }

        public function get_orders_assigned_id($order_id){
            $array = array('Assign_Order =' => $order_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Assignments');
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
            $p_id = $this->session->userdata('log_id')."__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/temp_orders/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/temp_orders/","",$file);
                if (/*str_starts_with($this_file, $p_id)*/ substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function order_get_attachments_submitted(){
            $p_id = $this->session->userdata('log_id')."__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/temp_submissions/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/temp_submissions/","",$file);
                if (substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function order_get_attachments_submitted_admin(){
            $p_id = "admin__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/temp_submissions/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/temp_submissions/","",$file);
                if (substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function order_get_attachments_admin(){
            $p_id = "admin__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/temp_orders/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/temp_orders/","",$file);
                if (/*str_starts_with($this_file, $p_id)*/ substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function order_get_submission_admin(){
            $p_id = "admin__";

            $file_list = "";
            $this_file = "";

            $path = './uploads/temp_submissions/*';
            foreach(glob($path) as $file)  {
                $this_file = str_replace("./uploads/temp_submissions/","",$file);
                if (/*str_starts_with($this_file, $p_id)*/ substr( $this_file, 0, strlen($p_id) ) == $p_id) {
                   $file_list.= "|__|".$this_file;
                }
            }

            return $file_list;

        }

        public function orders_make($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $order_attachments){

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
                'Order_Cost' => $order_cost,
            );

            return $this->db->insert('tbl_Orders ', $data);
        }

        public function orders_make_admin($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $order_attachments){

            $data = array(
                'Order_Name' => $order_name,
                'Order_Body' => $order_desc,
                'Order_Pages' => $order_page,
                'Order_Words' => $order_word,
                'Order_Comment' => $order_info,
                'Order_Attachment' => $order_attachments,
                'Order_Status' => "Inactive",
                'Order_Paid' => '00',
                'Order_Owner' => "Admin",
                'Order_Assigned' => '00',
                'Order_Accepted' => '00',
                'Order_Created' => time(),
                'Order_Deadline' => $order_date,
                'Order_Cite' => $order_cite,
                'Order_Level' => $order_level,
                'Order_Cost' => $order_cost,
            );

            return $this->db->insert('tbl_Orders ', $data);
        }

        public function orders_make_edit($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $order_attachments, $order_id){
            $order_data = $this->mod_orders->get_orders_id($order_id);
            $filed = $order_data['Order_Attachment'];
            $data = array(
                'Order_Name' => $order_name,
                'Order_Body' => $order_desc,
                'Order_Pages' => $order_page,
                'Order_Words' => $order_word,
                'Order_Comment' => $order_info,
                'Order_Attachment' => $filed.$order_attachments,
                'Order_Deadline' => $order_date,
                'Order_Cite' => $order_cite,
                'Order_Level' => $order_level,
                'Order_Cost' => $order_cost,
            );

            return $this->db->update('tbl_Orders', $data, "Order_Id = ".$order_id);
        }

        public function orders_make_delete($order_id){

            $order_data = $this->mod_orders->get_orders_id($order_id);
            $data = array(
                'Order_Original' => $order_data['Order_Id'],
                'Order_Name' => $order_data['Order_Name'],
                'Order_Body' => $order_data['Order_Body'],
                'Order_Pages' => $order_data['Order_Pages'],
                'Order_Words' => $order_data['Order_Words'],
                'Order_Comment' => $order_data['Order_Comment'],
                'Order_Attachment' => $order_data['Order_Attachment'],
                'Order_Status' => $order_data['Order_Status'],
                'Order_Paid' => $order_data['Order_Paid'],
                'Order_Owner' => $order_data['Order_Owner'],
                'Order_Assigned' => $order_data['Order_Assigned'],
                'Order_Accepted' => $order_data['Order_Accepted'],
                'Order_Created' => $order_data['Order_Created'],
                'Order_Deadline' => $order_data['Order_Deadline'],
                'Order_Cite' => $order_data['Order_Cite'],
                'Order_Level' => $order_data['Order_Level'],
                'Order_Cost' => $order_data['Order_Cost'],
            );

            $this->db->where('Order_Id',$order_id);
            $this->db->delete('tbl_Orders');

            $this->db->where('Assign_Order',$order_id);
            $this->db->delete('tbl_Assignments');

            $this->db->where('Order_Id',$order_id);
            $this->db->delete('tbl_Chat_Orders');

            return $this->db->insert('tbl_Orders_Deleted', $data);

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

        public function get_orders_client_convo_by_order($order_id, $order_owner){
            $this->db->where('Order_Id =', $order_id);
            $this->db->group_start();
            $this->db->or_where('Sender', $order_owner);
            $this->db->or_where('Recipient', $order_owner);
            $this->db->group_end();
            $query = $this->db->get('tbl_Chat_Orders');
            return $query->result_array();

        }

        public function make_delivery_to($person_id, $order_id){
            //Deliver_Id    Deliver_Time    Deliver_Message     Deliver_Files   Deliver_Viewed  Deliver_Order   Deliver_Maker   Deliever_Receiver   Deliver_Acceptance  
            $data = array(
                'Deliver_Time' => time(),
                'Deliver_Message' => "Admin",
                'Deliver_Files' => $assignee,
                'Deliver_Viewed' => "00",
                'Deliver_Order' => "00",
                'Deliver_Maker' => "00",
                'Deliver_Receiver' => $order_id,
                'Deliver_Acceptance' => "00",
            );

            return $this->db->insert('tbl_Delivery', $data);

        }

        public function get_all_assigned_to($userID){
            $array = array('Assignee =' => $userID);
            $this->db->where($array);
            $query = $this->db->get('tbl_Assignments');
            return $query->result_array();

        }

        public function get_all_assigned(){
            $query = $this->db->get('tbl_Assignments');
            return $query->result_array();

        }

        public function get_assigned_vars($order_id){
            $array = array('Assign_Order =' => $order_id);
            $this->db->where($array);
            $query = $this->db->get('tbl_Assignments');
            return $query->row_array();

        }

        public function make_assign($assignee, $order_id){

            $data = array(
                'Assign_Time' => time(),
                'Assigner' => "Admin",
                'Assignee' => $assignee,
                'Assign_Staus' => "00",
                'Assign_Reply' => "00",
                'Assign_Reply_Time' => "00",
                'Assign_Order' => $order_id,
            );

            return $this->db->insert('tbl_Assignments ', $data);
        }

        public function get_assigned_to($order_id){
            $this->db->where('Assign_Order', $order_id);

            $result = $this->db->get('tbl_Assignments');

            if ($result->num_rows()==1) {
                return $result->row(0);
            }else{
                return false;
            }
        } 

        public function get_assigned_update($ass_reply, $order_id){

            $data = array(
                'Assign_Reply' => $ass_reply,
                'Assign_Reply_Time' => time(),
            );

            return $this->db->update('tbl_Assignments', $data, "Assign_Order = ".$order_id);
        }

        public function make_submission($sub_message, $order_id, $sender, $sub_attached){
            $data = array(
                'Sender' => $sender,
                'Recipient' => "Admin",
                'Sent' => time(),
                'Seen' => "00",
                'Message' => $sub_message,
                'Order_Id' => $order_id,
                'Attachment' => $sub_attached,
            );

            return $this->db->insert('tbl_Chat_Orders', $data);
        }

        public function make_submission_reply($sub_message, $order_id, $sender, $sub_attached){
            $data = array(
                'Sender' => "Admin",
                'Recipient' => $sender,
                'Sent' => time(),
                'Seen' => "00",
                'Message' => $sub_message,
                'Order_Id' => $order_id,
                'Attachment' => $sub_attached,
            );

            return $this->db->insert('tbl_Chat_Orders', $data);
        }

        public function mark_as_completed_by_id($order_id){

            $data = array('Order_Status' => "Finished");

            return $this->db->update('tbl_Orders', $data, "Order_Id = ".$order_id);
        }
              
	}
?>