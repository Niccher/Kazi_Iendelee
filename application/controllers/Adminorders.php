<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminorders extends CI_Controller {

	public function index($page = 'all') {

		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail_order');
	}

	public function pending($page = 'pending') {
		
		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail_order');
	}

	public function completed($page = 'completed') {
		
		$titl['pag'] = 'orders';

		$data['orders_list'] = $this->mod_orders->get_orders();

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail_order');
	}

	public function view($page = 'view') {
		
		$titl['pag'] = 'orders';

		$word_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$data['orders_info'] = $this->mod_orders->get_orders_id($word_id);
		if (empty($data['orders_info'])) {
			redirect('admin/orders');
		}
		$data['user_list'] = $this->mod_users->get_users();
		$data['assign_list'] = $this->mod_orders->get_assigned_to($word_id);
		//print_r($data['assign_list']);
		$data['order_chats'] = $this->mod_orders->get_orders_convo_by_order($word_id);

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail_orderview');
	}

	public function orders_submit($page = 'submit') {
		
		$titl['pag'] = 'orders';

		$word_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
		$data['orders_info'] = $this->mod_orders->get_orders_id($word_id);
		if (empty($data['orders_info'])) {
			redirect('admin/orders');
		}

		$data['order_chats'] = $this->mod_orders->get_orders_convo_by_order($word_id);

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		//print_r($data['order_chats']);
		$this->load->view('administrator/orders/submit', $data);
		$this->load->view('administrator/template/tail_ordersubmit');
	}

	public function orders_get_attachment() {
		
		$filename = urldecode($this->uri->segment(4));
		$filepath = 'uploads/orders/'.$filename;
		force_download($filepath, NULL);
	}

	public function assign($page = 'view') {
		
		$titl['pag'] = 'orders';

		$word_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$orders_info = $this->mod_orders->get_orders_id($word_id);

		$price = $_POST['assigned_price'];
		$writer = $this->mod_crypt->Dec_String(urldecode($_POST['assigned_writer']));

		if (!empty($orders_info)) {
			if ($_POST['assigned_price'] == "" || $_POST['assigned_price'] == NULL) {
				$price = $orders_info->Order_Cost;
			}
		}	

		$user_info = $this->mod_users->get_vars($writer);
		$user_info_name = $this->mod_crypt->Dec_String($user_info->Name);
		$user_info_mail = $this->mod_crypt->Dec_String($user_info->Email);

		$this->mod_orders->make_assign($writer, $word_id);

		$head1 ='Hello, <b>'.$user_info_name.'</b> New assignment.';
            
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $user_info_mail;
        $senda = 'admin@tendollarwriters.com-----';

        $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>You have been assigned some work by the administrator, please log into the website to see the work.
                </div>';

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);

		redirect('orders/view/'.$this->uri->segment(3));
	}


	public function orders_create($page = 'create') {
			
		$titl['pag'] = 'orders';

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page);
		$this->load->view('administrator/template/tail_add_order');
	}

	public function orders_make() {

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));

		$order_name = $this->mod_crypt->Enc_String(trim($this->input->post('order_name')));
	    $order_desc = $this->mod_crypt->Enc_String(trim($this->input->post('order_desc')));
	    $order_page = $this->mod_crypt->Enc_String(trim($this->input->post('order_page')));
	    $order_word = $this->mod_crypt->Enc_String(trim($this->input->post('order_word')));
	    $order_level = $this->mod_crypt->Enc_String(trim($this->input->post('order_level')));
	    $order_cite = $this->mod_crypt->Enc_String(trim($this->input->post('order_cite')));
	    $order_date = $this->mod_crypt->Enc_String(trim($this->input->post('order_date')));
	    $order_info = $this->mod_crypt->Enc_String(trim($this->input->post('order_comment')));
	    $order_cost = $this->mod_crypt->Enc_String(trim($this->input->post('order_price')));

	    $attachments = $this->mod_orders->order_get_attachments_admin();

	    if ($order_date == "") {
	    	$order_date = date('d-M-Y',strtotime("+1 week"));
	    }

	    $this->mod_orders->orders_make_admin($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $attachments);

	    $each_file = explode('|__|', $attachments);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_orders/'.$each_file[$i], './uploads/orders/'.$each_file[$i]);
        }

	    redirect('admin/orders');
	}

	public function orders_edit($order_id) {

		$titl['pag'] = 'orders';
		$page = 'edit';

		$data['order_info'] = $this->mod_orders->get_orders_id($this->mod_crypt->Dec_String(urldecode($order_id)));

		if ($data['order_info']['Order_Status'] == "Finished") { redirect('admin/orders'); }

		$this->load->view('administrator/template/header');
		$this->load->view('administrator/template/sidebar', $titl);
		$this->load->view('administrator/orders/'.$page, $data);
		$this->load->view('administrator/template/tail_add_order');

	}

	public function orders_make_edit($order_id) {
		$uuid = $this->mod_crypt->Dec_String(urldecode($order_id));
		$order_info = $this->mod_orders->get_orders_id($uuid);
		$order_files = $order_info['Order_Attachment'];

		$order_name = $this->mod_crypt->Enc_String(trim($this->input->post('order_name')));
	    $order_desc = $this->mod_crypt->Enc_String(trim($this->input->post('order_desc')));
	    $order_page = $this->mod_crypt->Enc_String(trim($this->input->post('order_page')));
	    $order_word = $this->mod_crypt->Enc_String(trim($this->input->post('order_word')));
	    $order_level = $this->mod_crypt->Enc_String(trim($this->input->post('order_level')));
	    $order_cite = $this->mod_crypt->Enc_String(trim($this->input->post('order_cite')));
	    $order_date = trim($this->input->post('order_date'));
	    $order_info = $this->mod_crypt->Enc_String(trim($this->input->post('order_comment')));
	    $order_cost = $this->mod_crypt->Enc_String(trim($this->input->post('order_price')));

	    $attachments = $this->mod_orders->order_get_attachments_admin();

	    if ($order_date == "") {
	    	$order_date = date('d-M-Y',strtotime("+1 week"));
	    }

	    $this->mod_orders->orders_make_edit($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $attachments.'|__|'.$order_files, $uuid);

	    $each_file = explode('|__|', $attachments);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_orders/'.$each_file[$i], './uploads/orders/'.$each_file[$i]);
        }

	    redirect('admin/orders');

	}

	public function orders_make_attachment() {

		$person_id = "admin";
		print_r(empty($_FILES));

		if (!empty($_FILES) ) {
             
            $tempFile = $_FILES['file']['tmp_name'];
            $realFile = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));

            $old_name = $_FILES['file']['name'];
            $new_name = preg_replace('/[^A-Za-z0-9.]/', '_', $old_name);

            $code = substr(time(), -7);
            $newfilename = $person_id."__".$code."_".$new_name;
               
            $this->mod_orders->order_temp_upload($person_id, $newfilename);
            move_uploaded_file($tempFile, "uploads/temp_orders/" . $newfilename);
            echo "File sent";
        }else{
        	echo "File not sent";
        }

	}

	public function orders_make_submission_attachment() {
		$person_id = "admin"; 

		if (!empty($_FILES) ) {
             
            $tempFile = $_FILES['file']['tmp_name'];
            $realFile = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));

            $old_name = $_FILES['file']['name'];
            $new_name = preg_replace('/[^A-Za-z0-9.]/', '_', $old_name);

            $code = substr(time(), -7);
            $newfilename = $person_id."__".$code."_".$new_name;
               
            $this->mod_orders->order_temp_upload($person_id, $newfilename);
            move_uploaded_file($tempFile, "uploads/temp_submissions/" . $newfilename);
            echo "File sent";
        }else{
        	echo "File not sent";
        }
	}

	public function orders_make_submission_message() {
        $order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));  
		$msg = $this->mod_crypt->Enc_String($_POST['msg_content']);
		$sub_attached = $this->mod_orders->order_get_attachments_submitted_admin();

		$this->mod_orders->make_submission_reply($msg, $order_id, "Admin", $sub_attached);

		$each_file = explode('|__|', $sub_attached);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_submissions/'.$each_file[$i], './uploads/submissions/'.$each_file[$i]);
        }

	}

	public function orders_make_attachment_ui() {

		$each_file = explode("|__|", $this->mod_orders->order_get_attachments_admin());
        $fina_file_list='';

        $fina_file_list.='
            <div class="mb-3 position-relative">
                <div class="text-start">';

        for ($i=1; $i < count($each_file); $i++) { 
            $fina_file_list.= '
                <p class="text-muted mb-0">
                    <strong>'.$each_file[$i].' </strong>
                    <span class="text-danger mdi mdi-trash-can delete_attach_file_" id="delete_attach_file_'.$each_file[$i].'"></span>
                </p>';
        }

        $fina_file_list.= '
                </div>
            </div>';

        echo $fina_file_list;

	}

	public function orders_make_submission_ui() {

		$each_file = explode("|__|", $this->mod_orders->order_get_submission_admin());
        $fina_file_list='';

        $fina_file_list.='
            <div class="mb-3 position-relative">
                <div class="text-start">';

        for ($i=1; $i < count($each_file); $i++) { 
            $fina_file_list.= '
                <p class="text-muted mb-0">
                    <strong>'.$each_file[$i].' </strong>
                    <span class="text-danger mdi mdi-trash-can delete_attach_file_" id="delete_attach_file_'.$each_file[$i].'"></span>
                </p>';
        }

        $fina_file_list.= '
                </div>
            </div>';

        echo $fina_file_list;

	}


	public function send_submission() {

        $msg = $this->mod_crypt->Enc_String($_POST['msg_content']);
		
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$user_info = $this->mod_orders->get_orders_assigned_id($order_id);
		$sub_attached = $this->mod_orders->order_get_attachments_submitted_admin();
		$user_id = $user_info['Assignee'];

		$this->mod_orders->make_submission_reply($msg, $order_id, $user_id, $sub_attached);

		$each_file = explode('|__|', $sub_attached);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_submissions/'.$each_file[$i], './uploads/submissions/'.$each_file[$i]);
        }

	}

	public function order_finalize() {
		
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
		$this->mod_orders->mark_as_completed_by_id($order_id);
		redirect('orders/completed');

	}

	public function get_submission_convo() {

		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$order_chats = $this->mod_orders->get_orders_convo_by_order($order_id);

		$user_id = $this->mod_orders->get_orders_assigned_id($order_id);
		$user_info = $this->mod_users->get_vars($user_id['Assignee']);

		$chats = "";

		foreach ($order_chats as $order_chat) {
	        $attached = "";
	        if ($order_chat['Attachment'] != "" || $order_chat['Attachment'] != NULL) {
	            $all_files = explode("|__|", $order_chat['Attachment']);
	            
	            for ($i=1; $i < count($all_files); $i++) {
	                $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/submissions/'.urldecode($all_files[$i])));
	                $attached .= '
	                <div class="card mt-2 mb-1 shadow-none border text-start">
	                    <div class="p-2">
	                        <div class="row align-items-center">
	                            <div class="col-auto">
	                                <div class="avatar-sm">
	                                    <span class="avatar-title rounded">
	                                        .'.pathinfo($all_files[$i], PATHINFO_EXTENSION).'
	                                    </span>
	                                </div>
	                            </div>
	                            <div class="col ps-0">
	                                <a href="'.base_url('admin/orders/get_submission/'.$all_files[$i]).'" class="text-muted fw-bold">'.$all_files[$i].'</a>
	                                <p class="mb-0">'.$human_size.'</p>
	                            </div>
	                            <div class="col-auto">
	                                <a href="'.base_url('admin/orders/get_submission/'.$all_files[$i]).'" target="_blank"
	                                    class="btn btn-link text-muted btn-lg p-0">
	                                    <i class="uil uil-cloud-download"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                ';
	            }
	        }else{
	            $attached = "";
	        }

	        if ($order_chat['Sender'] != "Admin" || $order_chat['Sender'] == $user_id ) {
	        	if ($order_chat['Sender'] == $user_id['Assignee']) {
	        		echo '
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="'.base_url('uploads/profiles/'.$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'" class="rounded avatar-sm" />
                            <i>'.date('d H:i',$order_chat['Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>'.$this->mod_crypt->Dec_String($user_info->Name).':</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                </p>
                                '.$attached.'
                            </div>
                        </div>
                    </li>
                    ';
	        	}
                
            }else if ($order_chat['Sender'] == "Admin") {
                echo '
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="'.base_url('assets/images/waves.png').'" alt="Admin:" class="rounded" />
                            <i>'.date('H:i:s A',$order_chat['Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>Admin:</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                </p>
                                '.$attached.'
                            </div>
                        </div>

                    </li>
                ';
            }
    	}

    	echo $chats;

	}

	public function get_submission_convo_client() {

		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));
		$order_chats = $this->mod_orders->get_orders_convo_by_order($order_id);

		$user_id = $this->mod_orders->get_orders_assigned_id($order_id);
		$user_info = $this->mod_users->get_vars($user_id['Assignee']);

		$chats = "";

		foreach ($order_chats as $order_chat) {
	        $attached = "";
	        if ($order_chat['Attachment'] != "" || $order_chat['Attachment'] != NULL) {
	            $all_files = explode("|__|", $order_chat['Attachment']);
	            
	            for ($i=1; $i < count($all_files); $i++) {
	                $human_size = $this->mod_orders->get_attachment_size(filesize('uploads/submissions/'.urldecode($all_files[$i])));
	                $attached .= '
	                <div class="card mt-2 mb-1 shadow-none border text-start">
	                    <div class="p-2">
	                        <div class="row align-items-center">
	                            <div class="col-auto">
	                                <div class="avatar-sm">
	                                    <span class="avatar-title rounded">
	                                        .'.pathinfo($all_files[$i], PATHINFO_EXTENSION).'
	                                    </span>
	                                </div>
	                            </div>
	                            <div class="col ps-0">
	                                <a href="'.base_url('admin/orders/get_submission/'.$all_files[$i]).'" class="text-muted fw-bold">'.$all_files[$i].'</a>
	                                <p class="mb-0">'.$human_size.'</p>
	                            </div>
	                            <div class="col-auto">
	                                <a href="'.base_url('admin/orders/get_submission/'.$all_files[$i]).'" target="_blank"
	                                    class="btn btn-link text-muted btn-lg p-0">
	                                    <i class="uil uil-cloud-download"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                ';
	            }
	        }else{
	            $attached = "";
	        }

	        if ($order_chat['Sender'] != "Admin" || $order_chat['Sender'] == $user_id ) {
	        	if ($order_chat['Sender'] != $user_id['Assignee']) {
	        		echo '
                    <li class="clearfix">
                        <div class="chat-avatar">
                            <img src="'.base_url('uploads/profiles/'.$user_info->Avatar).'" alt="'.$this->mod_crypt->Dec_String($user_info->Name).'" class="rounded avatar-sm" />
                            <i>'.date('d H:i',$order_chat['Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>'.$this->mod_crypt->Dec_String($user_info->Name).':</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                </p>
                                '.$attached.'
                            </div>
                        </div>
                    </li>
                    ';
	        	}
                
            }else if ($order_chat['Sender'] == "Admin") {
                echo '
                    <li class="clearfix odd">
                        <div class="chat-avatar">
                            <img src="'.base_url('assets/images/waves.png').'" alt="Admin:" class="rounded" />
                            <i>'.date('H:i:s A',$order_chat['Sent']).'</i>
                        </div>
                        <div class="conversation-text">
                            <div class="ctext-wrap">
                                <i>Admin:</i>
                                <p>
                                    '.$this->mod_crypt->Dec_String($order_chat['Message']).'
                                </p>
                                '.$attached.'
                            </div>
                        </div>

                    </li>
                ';
            }
    	}

    	echo $chats;

	}

	public function orders_delete_submission() {

		$file = explode("delete_attach_file_", $this->uri->segment(4));
        unlink('uploads/temp_submissions/'.$file[1]);

	}

	public function orders_attachment_delete($fileid) {
        $file = explode("delete_attach_file_", $fileid);
        echo "file at -> ".$file[1];
        unlink('uploads/temp_orders/'.$file[1]);

	}


	public function orders_delete($order_id) {
		$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(3)));

        $orders_exists = $this->mod_orders->get_orders_id($uuid);

        if (!empty($orders_exists)) {
        	//$this->mod_orders->get_delete_order_by_id($uuid);
        	$this->mod_orders->orders_make_delete($uuid);
        	echo "11";
        }else{
        	echo "no such order empty";
        }

	}

	public function order_get_submission() {
		$uuid = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));

        $filename = urldecode($this->uri->segment(4));
		echo $filepath = 'uploads/submissions/'.$filename;
		force_download($filepath, NULL);

	}

}
