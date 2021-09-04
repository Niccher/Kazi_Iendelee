<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
	
	public function transaction_pay($transaction_id) {
		
		/*//print_r($data['transact_data']);
		
		$name = $this->mod_crypt->Dec_String(base64_decode($this->session->userdata('log_name')));
		$lname = $this->session->userdata('log_id');
		
		$card_type = $this->mod_paypal->validate_card($_POST['card_number']);
		$card_number = $_POST['card_number'];
		$card_name = $_POST['name_on_card'];
		$card_year = $_POST['expiry_year'];
		$card_month = $_POST['expiry_month'];
		$card_cvv = $_POST['cvv'];
		
		//print_r($_POST);
		
	    $paypalParams = array( 
            'paymentAction' => 'Sale__'.$transact_id, 
            'itemName' => $data['transact_data']['Name'], 
            'itemNumber' => $data['transact_data']['Transaction_ID'], 
            'amount' => $this->mod_crypt->Dec_String(base64_decode($data['transact_data']['Expected_Funds'])), 
            'currencyCode' => 'KES', 
            'creditCardType' => $card_type, 
            'creditCardNumber' => $card_number, 
            'expMonth' => $card_month, 
            'expYear' => $card_year, 
            'cvv' => $card_cvv, 
            'firstName' => $name, 
            'lastName' => $lname, 
            'city' => 'Nairobi', 
            'zip'    => '12365', 
            'countryCode' => '254', 
        );  
        
        //print_r($paypalParams);
        
        $response = $this->libpaypal->initvars($paypalParams); 
        $paymentStatus = strtoupper($response["ACK"]); 
        if($paymentStatus == "SUCCESS"){ 
            // Transaction info 
            $transactionID = $response['TRANSACTIONID']; 
            $paidAmount = $response['AMT']; 
            $currency = $response['CURRENCYCODE']; 
             
            // Insert the transaction data in the database 
            $txnData['product_id'] = $id; 
            $txnData['buyer_name'] = $name; 
            $txnData['buyer_email']    = ''; 
            $txnData['card_num'] = $creditCardNumber; 
            $txnData['card_cvc'] = $cvv; 
            $txnData['card_exp_month'] = $expMonth; 
            $txnData['card_exp_year'] = $expYear; 
            $txnData['paid_amount'] = $paidAmount; 
            $txnData['paid_amount_currency'] = $currency; 
            $txnData['payment_txn_id'] = $transactionID; 
            $txnData['payment_status'] = $paymentStatus; 

            //$insert = $this->product->insertOrder($txnData); 
             
            $data['status'] = 1; 
            $data['orderID'] = $transactionID; 
        }else{ 
             $data['status'] = 0; 
        }*/
        
        //echo json_encode($data); 
	}
	
	public function transaction_stripe_pay($transaction_id) {

		$payer = $this->session->userdata('log_id');
		$order_id = $this->mod_crypt->Dec_String($this->uri->segment(3));

		$user_info = $this->mod_users->get_vars($this->session->userdata('log_id'));
        $user_url = strtolower(preg_replace('/[0-9\@\.\;\" "]+/', '', $this->mod_crypt->Dec_String($user_info->Name))); 

        $id = urlencode($this->mod_crypt->Enc_String($order_id));
        $order_info = $this->mod_orders->get_orders_id($order_id);
        $order_name = $this->mod_crypt->Dec_String($order_info['Order_Name']);
        $order_cost = $this->mod_crypt->Dec_String($order_info['Order_Cost']);
        $order_date = ($order_info['Order_Deadline']);
		
		$stripe_Token = $_POST['stripeToken'];
		$stripe_Email = $_POST['stripeEmail'];
		
		require_once APPPATH."third_party/stripe/init.php";

		$stripe = array(
                "secretKey" => "sk_test_51JAW36LbL1tUcWWUdDb7iU1Y1BmimlhcMGEfvvvW5rBkhWfTXELXLAqU8u5uU7B2STPBhyCXpZz1OAlgpLMFrbBz00yjr5sREd",
        		"publishableKey" => "pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp"
			);
			
		\Stripe\Stripe::setApiKey($stripe['secretKey']);
		\Stripe\Stripe::setVerifySslCerts(false);
			
        $customer = \Stripe\Customer::create(array(
            'email' => $stripe_Email,
            'source'  => $stripe_Token
        ));
        
		$currency = "usd";
        
        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount'   => $order_cost,
            'currency' => $currency,
            'description' => $order_name,
            'metadata' => array(
                'item_id' => $id
            )
        ));
		
		$chargeJson = $charge->jsonSerialize();

		//check whether the charge is successful
		if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
			//order details 
			$amount = $chargeJson['amount'];
			$balance_transaction = $chargeJson['balance_transaction'];
			$currency = $chargeJson['currency'];
			$status = $chargeJson['status'];
			$date = date("Y-m-d H:i:s");
			
			$dataDB = array(
				'Person' => $this->session->userdata('log_id'),
				'Stripe_Token' => $_POST['stripeToken'], 
				'Stripe_Email' => $_POST['stripeEmail'],
				'Time_At' => time(), 
				'Transaction' => $id, 
				'Stripe_Amount' => $amount,
				'Stripe_Balance_Transaction' => $balance_transaction,
				'Stripe_Currency' => $currency,
				'Stripe_Status' => $status
			);
			
			$dataupdate = array('Order_Paid' => '11');
			
			$this->db->where('Order_Id', $order_id);
            $this->db->update('tbl_Orders', $dataupdate);
			
			if ($this->db->insert('tbl_Stripe', $dataDB)) {
				if($this->db->insert_id() && $status == 'succeeded'){
					redirect('buyer/'.$user_url.'/orders/view/'.$id);
				}else{
					echo "Transaction has been failed";
				}
			}else{
				
			}

		}else{
			$statusMsg = "";
			
		}

		redirect('buyer/'.$user_url.'/orders/view/'.$id);
        
	}
	
}
