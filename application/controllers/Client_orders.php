
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_orders extends CI_Controller {

	public function orders($page = 'orders') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$titl['pag'] = 'orders';

		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

	public function orders_pending($page = 'pending') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$titl['pag'] = 'orders';

		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

	public function orders_completed($page = 'completed') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$titl['pag'] = 'orders';

		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

	public function orders_view() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$titl['pag'] = 'orders';
		$page = 'view'; 
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['order_info'] = $this->mod_orders->get_orders_id($order_id);
		$data['order_chats'] = $this->mod_orders->get_orders_client_convo_by_order($order_id, $this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page, $data);
		$this->load->view('buyers/template/tail_view');

	}

	public function orders_create($page = 'create') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page);
		$this->load->view('buyers/template/tail');
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

	    $attachments = $this->mod_orders->order_get_attachments();

	    if ($order_date == "") {
	    	$order_date = date('d-M-Y',strtotime("+1 week"));
	    }

	    $this->mod_orders->orders_make($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $attachments);

	    $each_file = explode('|__|', $attachments);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_orders/'.$each_file[$i], './uploads/orders/'.$each_file[$i]);
        }

	    $head1 ='Order, <b>'.$this->mod_crypt->Dec_String($order_name).'</b>, created succesfully';
            
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $this->mod_crypt->Dec_String($this->session->userdata('log_mail'));
        $senda = 'admin@tendollarwriters.com-----';

        $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>Your order is currently being reviewed, please be patient.<br>Soonest we are going to give you a response, that will let you proceed to paying for the order
                </div>';

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);

	    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    //buyer/(:any)/orders/pay/(:any)

	    redirect('buyer/'.$user_url.'/orders');

	}

	public function orders_make_attachment() {
		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

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
        }
        echo "Uploaded";

	}

	public function orders_make_submission() {
		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

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
        }
        echo "Uploaded";
        
	}

	public function orders_get_attachment() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;


		$filename = urldecode($this->uri->segment(5));
		$filepath = 'uploads/orders/'.$filename;
		force_download($filepath, NULL);

	}

	public function orders_convo() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));

		$data['order_info'] = $this->mod_orders->get_orders_id($order_id);

		$convo_msg = trim($_POST['convo_body']);

		if ($data['order_info']['Order_Status']) {
			$reciva = 'Admin';
		}else{
			$reciva = 'Reseller';
		}

		if (isset($_POST['convo_body']) && $convo_msg != "") {
			$safe_msg = $this->mod_crypt->Enc_String($convo_msg);
			$this->mod_orders->order_make_convo($person_id, $reciva, $safe_msg, $order_id);
			echo "1";
		}else{
			echo "Failed";
		}

	}

	public function orders_get_convo() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));

		if ($order_id != "") {
			$order_chats = $this->mod_orders->get_orders_convo_by_order($order_id);
			foreach ($order_chats as $order_chat) {
				if ($order_chat['Sender'] == $person_id) {
					echo '
						<div class="d-flex mt-3 p-1">
			                <img src="<?php echo base_url("../../../../uploads/profiles"'.$data['user_info']->Avatar.'" class="me-2 rounded-circle" height="36" />
			                <div class="w-100">
			                    <h5 class="mt-0 mb-0">
			                        <span class="float-end text-muted font-12">'.date('H:i:s A',$order_chat['Sent']).'</span>
			                        '.$this->mod_crypt->Dec_String($data['user_info']->Name).'
			                    </h5>
			                    <p class="mt-1 mb-0 text-muted">
			                        '.$this->mod_crypt->Dec_String($order_chat['Message']).'
			                    </p>
			                </div>
			            </div>
			            <hr>
					';
				}else{
					echo '
						<div class="d-flex mt-3 p-1">
			                <img src="" class="me-2 rounded-circle" height="36" />
			                <div class="w-100">
			                    <h5 class="mt-0 mb-0">
			                        <span class="float-end text-muted font-12">'.date('H:i:s A',$order_chat['Sent']).'</span>
			                        '.$order_chat['Sender'].'
			                    </h5>
			                    <p class="mt-1 mb-0 text-muted">
			                        '.$this->mod_crypt->Dec_String($order_chat['Message']).'
			                    </p>
			                </div>
			            </div>
			            <hr>
					';
				}
				
			}
		} else {
			echo "No data";
		}
		

	}

	public function orders_pay($page = 'billing') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'orders';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail_pay.php');
		
	}


	public function delete() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

		$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
		
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));
		$order_info = $this->mod_orders->get_orders_id($order_id);

		if (empty($order_info)) {
			redirect('buyer/'.$user_url.'/orders');
		}

		if ($order_info['Order_Id'] == $order_id) {
			$this->mod_orders->orders_make_delete($order_id);
			redirect('buyer/'.$user_url.'/orders');
		}else{
			redirect('buyer/'.$user_url.'/orders');
		}

	}

	public function order_edit($page = 'edit') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

        $titl['pag'] = 'orders';

		$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 
		
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));
		$order_info = $this->mod_orders->get_orders_id($order_id);

		if (empty($order_info)) {
			redirect('buyer/'.$user_url.'/orders');
		}

		if ($order_info['Order_Status'] == 'Finished') {
			redirect('buyer/'.$user_url.'/orders');
		}

		if ($order_info['Order_Id'] == $order_id) {

			$data['order_info'] = $order_info;

			$this->load->view('buyers/template/header');
			$this->load->view('buyers/template/sidebar', $titl);
			$this->load->view('buyers/orders/'.$page, $data);
			$this->load->view('buyers/template/tail');
		}else{
			redirect('buyer/'.$user_url.'/orders');
		}

	}

	public function orders_make_edit_change() {

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

	    $attachments = $this->mod_orders->order_get_attachments();

	    if ($order_date == "") {
	    	$order_date = date('d-M-Y',strtotime("+1 week"));
	    }

	    $order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(5)));
	    $this->mod_orders->orders_make_edit($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $attachments, $order_id);

	    $each_file = explode('|__|', $attachments);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_orders/'.$each_file[$i], './uploads/orders/'.$each_file[$i]);
        }

	    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    redirect('buyer/'.$user_url.'/orders');

	}


	public function orders_make_attachment_ui() {
		$each_file = explode("|__|", $this->mod_orders->order_get_attachments_submitted());
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

	public function orders_get_submission_chats() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $user_info->Person_ID;
		$person_name = $this->mod_crypt->Dec_String($user_info->Name);
		$user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $person_name)); 
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));

		//$chats = $this->mod_orders->get_submission_convo_($person_id, $order_id);
		$chats = $this->mod_orders->get_orders_convo_by_order( $order_id);
		$convos = "";

		foreach ($chats as $order_chat) {
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
                                    <a href="'.base_url('buyer/'.$user_url.'/orders/submision/'.$all_files[$i]).'" class="text-muted fw-bold">'.$all_files[$i].'</a>
                                    <p class="mb-0">'.$human_size.'</p>
                                </div>
                                <div class="col-auto">
                                    <a href="'.base_url('buyer/'.$user_url.'/orders/submision/'.$all_files[$i]).'" target="_blank"
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

            if ($order_chat['Sender'] == $user_info->Person_ID) {
                $img = base_url('uploads/profiles/'.$user_info->Avatar);
                $convos .= '
                    <li class="clearfix odd">
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
            }else if ($order_chat['Sender'] == "Admin") {
                $convos .= '
                    <li class="clearfix">
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
		
		echo $convos;

	}


	public function send_submission() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

        $msg = $this->mod_crypt->Enc_String($_POST['msg_content']);
		
		$user_id = $this->session->userdata('log_id');
		$order_id = $this->mod_crypt->Dec_String(urldecode($this->uri->segment(4)));
		$sub_attached = $this->mod_orders->order_get_attachments_submitted();

		$this->mod_orders->make_submission($msg, $order_id, $user_id, $sub_attached);

		$each_file = explode('|__|', $sub_attached);
        for ($i=0; $i < count($each_file); $i++) { 
            rename('./uploads/temp_submissions/'.$each_file[$i], './uploads/submissions/'.$each_file[$i]);
        }

	}

	public function orders_attachment_delete() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

        $file = explode("delete_attach_file_", $this->uri->segment(4));
        unlink('uploads/temp_submissions/'.$file[1]);
	}

	public function submission_attachment_delete() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

        $file = explode("delete_attach_file_", $this->uri->segment(4));
        unlink('uploads/temp_submissions/'.$file[1]);
	}

	public function orders_get_submission() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;


		$filename = urldecode($this->uri->segment(5));
		$filepath = 'uploads/submissions/'.$filename;
		force_download($filepath, NULL);

	}

}
