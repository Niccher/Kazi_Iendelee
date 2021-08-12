<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index($page = 'home') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

		$titl['pag'] = 'orders';

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$data['user_orders'] = $this->mod_orders->get_orders_by($this->session->userdata('log_id'));

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page, $data);
		$this->load->view('buyers/template/tail');

	}

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

		$order_name = (trim($this->input->post('order_name')));
	    $order_desc = (trim($this->input->post('order_desc')));
	    $order_page = (trim($this->input->post('order_page')));
	    $order_word = (trim($this->input->post('order_word')));
	    $order_level = (trim($this->input->post('order_level')));
	    $order_cite = (trim($this->input->post('order_cite')));
	    $order_date = (trim($this->input->post('order_date')));
	    $order_info = (trim($this->input->post('order_comment')));

	    $attachments = $this->mod_orders->order_get_attachments();

	    $attachments_elements ="";
	    foreach ($attachments as $files) {
	    	$attachments_elements.= $files['Filename'].'|||';
	    }

	    $this->mod_orders->orders_make($order_name, $order_desc, $order_page, $order_word, $order_level, $order_cite, $order_date, $order_info, $attachments_elements);

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
            $new_name = preg_replace('/[^A-Za-z0-9 .]/', '_', $old_name);

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

	public function sales($page = 'sales') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'sales';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function invoices($page = 'invoices') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'invoices';

		$this->load->view('buyers/template/header');
		//$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/sales/'.$page);
		$this->load->view('buyers/template/tail');
	}

	public function profile($page = 'profile') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'profile';
		$data['label_eml'] = '<small class="text-warning">This has to match with your current email. </small>';
		$data['label_pwd'] = '<small class="text-warning">This has to match with your current password. </small>';

		$data['user_posts'] = $this->mod_posts->get_posts_by($data['user_info']->Person_ID);

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

	public function add_post() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		$post_body = (trim($this->input->post('new_post')));


	    if (isset($post_body) && $post_body != '') {
	    	print('<br>post_body $'. $post_body.'$');
	    	$this->mod_posts->make_post($person_id, $this->mod_crypt->Enc_String($post_body));
	    }

	    $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 

	    redirect('buyer/'.$user_url.'/profile');
	}

	public function profile_make($page = 'profile') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }

		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		$data_pwd = $data['user_info']->Password;
		$data_eml = $data['user_info']->Email;

		$data['label_eml'] = '<small class="text-warning">This has to match with your current email. </small>';
		$data['label_pwd'] = '<small class="text-warning">This has to match with your current password. </small>';
		$titl['pag'] = 'profile';

		$data['user_posts'] = $this->mod_posts->get_posts_by($this->session->userdata('log_id'));

        $ed_name_first = (trim($this->input->post('ed_name_first')));
        $ed_name_last = (trim($this->input->post('ed_name_last')));
	    $ed_desc_bio = (trim($this->input->post('ed_desc_bio')));
	    $ed_eml_old = (trim($this->input->post('ed_eml_old')));
	    $ed_eml_new = (trim($this->input->post('ed_eml_new')));
	    $ed_pwd_old = (trim($this->input->post('ed_pwd_old')));
	    $ed_pwd_new = (trim($this->input->post('ed_pwd_new')));
	    $ed_social_fb = (trim($this->input->post('ed_social_fb')));
	    $ed_social_tw = (trim($this->input->post('ed_social_tw')));
	    $ed_social_ig = (trim($this->input->post('ed_social_ig')));


	    if (isset($ed_name_first) && $ed_name_first != '') {
	    	//print('<br>ed_name_first $'. $ed_name_first.'$');
	    	$this->mod_client->update_profile_fname($person_id, $this->mod_crypt->Enc_String($ed_name_first));
	    }
	    if (isset($ed_name_last) && $ed_name_last != '') {
	    	//print('<br>ed_name_last $'. $ed_name_last.'$');
	    	$this->mod_client->update_profile_lname($person_id, $this->mod_crypt->Enc_String($ed_name_last));
	    }
	    if (isset($ed_desc_bio) && $ed_desc_bio != '') {
	    	//print('<br>ed_desc_bio $'. $ed_desc_bio.'$');
	    	$this->mod_client->update_profile_bio($person_id, $this->mod_crypt->Enc_String($ed_desc_bio));
	    }
	    if (isset($ed_eml_old) && $ed_eml_old != '' && isset($ed_eml_new) && $ed_eml_new != '') {
			if ($this->mod_crypt->Enc_String($ed_eml_old) == $data_eml) {
				$data['label_eml'] = '<small class="text-success">Email has been successfully changed. </small>';
				$this->mod_client->update_profile_email($person_id, $this->mod_crypt->Enc_String($ed_eml_new));
			}else{
				$data['label_eml'] = '<small class="text-danger">Email did not match as expected </small>';
			}
	    	
	    }

	    if (isset($ed_pwd_old) && $ed_pwd_old != '' && isset($ed_pwd_new) && $ed_pwd_new != '') {
	    	if ($this->mod_crypt->Enc_String($ed_pwd_old) == $data_pwd) {
				//print('<br>New Passwprd Set is $'. $ed_eml_old.'$');
				$data['label_pwd'] = '<small class="text-success">Password Succesfully changed. </small>';
				$this->mod_client->update_profile_pwd($person_id, $this->mod_crypt->Enc_String($ed_pwd_new));
			}else{
				$data['label_pwd'] = '<small class="text-danger">Password did not match. </small>';
			}
	    }

	    if (isset($ed_social_fb) && $ed_social_fb != '') {
	    	//print('<br>ed_social_fb $'. $ed_social_fb.'$');
	    	$this->mod_client->update_profile_fb($person_id, $this->mod_crypt->Enc_String($ed_social_fb));
	    }
	    if (isset($ed_social_tw) && $ed_social_tw != '') {
	    	//print('<br>ed_social_tw $'. $ed_social_tw.'$');
	    	$this->mod_client->update_profile_tw($person_id, $this->mod_crypt->Enc_String($ed_social_tw));
	    }
	    if (isset($ed_social_ig) && $ed_social_ig != '') {
	    	//print('<br>ed_social_ig $'. $ed_social_ig.'$');
	    	$this->mod_client->update_profile_ig($person_id, $this->mod_crypt->Enc_String($ed_social_ig));
	    }
		

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

	public function profile_image() {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		$person_id = $data['user_info']->Person_ID;

		if (!empty($_FILES) ) {

            $allowed = array("png","jpeg", "jpg",'gif','bmp','tiff','webp');
             
            $tempFile = $_FILES['file']['tmp_name'];
            $realFile = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($realFile, PATHINFO_EXTENSION));
            

            if (in_array($ext, $allowed)) {
                $newer_name = random_string('alnum', 8).'_'.random_string('alnum', 8).'.'.$ext; 
                $code = substr(time(), -7);
                $newfilename = $code."_".$newer_name;                
                $this->mod_client->update_profile_avatar($person_id, $newfilename);
                move_uploaded_file($tempFile, "uploads/profiles/" . $newfilename);
            }
        }

	    //$user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($data['user_info']->Name))); 
	    //redirect('buyer/'.$user_url.'/profile');
	}

	public function mails($page = 'mailbox') {

		$typ = $this->session->userdata('log_type');
        if (! $this->session->userdata('log_id') || $typ != "cat_Buyer") {
            redirect('auth/login');
        }
		
		$data['user_info'] = $this->mod_users->get_vars($this->session->userdata('log_id'));
		
		$titl['pag'] = 'mails';

		$this->load->view('buyers/template/header');
		$this->load->view('buyers/template/sidebar', $titl);
		$this->load->view('buyers/mails/'.$page, $data);
		$this->load->view('buyers/template/tail');
	}

}
