
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
		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));
		$data['order_info'] = $this->mod_orders->get_orders_id($order_id);
		$data['order_chats'] = $this->mod_orders->get_orders_convo_by_order($order_id);

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/orders/'.$page, $data);
		$this->load->view('buyers/template/tail');
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

	    $attachments_elements ="";
	    foreach ($attachments as $files) {
	    	$attachments_elements.= $files['Filename'].'|||';
	    }

	    $this->mod_orders->orders_make($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $order_cost, $attachments_elements);

	    $head1 ='Order, <b>'.$this->mod_crypt->Dec_String($order_name).'</b>, created succesfully';
            
        $head ='<td class="header-row-td" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" width="378" valign="top" align="left">'.$head1.'</td>';
        $reciva = $this->mod_crypt->Dec_String($this->session->userdata('log_mail'));
        $senda = 'admin@tendollarwriters.com-----';

        $more = '<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;"> 
                    <b style="color: #777777;"></b>Your order is currently being reviewed, please be patient.<br>Soonest we are going to give you a response, that will let you proceed to paying for the order
                </div>';

        $this->mod_emails->mail_this($senda, $reciva, $more, $head, $head1);

	    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    redirect('buyer/'.$user_url.'/orders');

	}

	public function orders_make_attachment() {

		print_r($_FILES);

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
            $newfilename = $code."_".$new_name;
               
            $this->mod_orders->order_temp_upload($person_id, $newfilename);
            move_uploaded_file($tempFile, "uploads/temp_orders/" . $newfilename);
        }

	}

	public function orders_get_attachment() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;


		echo $filename = urldecode($this->uri->segment(5));
		echo '<br>';
		echo $filepath = 'uploads/temp_orders/'.$filename;
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
		$this->load->view('buyers/template/tail');
	}

}
