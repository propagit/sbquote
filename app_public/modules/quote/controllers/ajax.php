<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function get_quote()
	{
		$input = $this->input->post();
		
		$data['quote'] = modules::run('quote/generate_quote',$input);
		
		$data['input'] = $input;
		$data['quote_id'] = time();
		
		# html for web
		$quote = $this->load->view('quote_result',isset($data) ? $data : NULL,true);
		
		#html for email
		$email_msg = $this->load->view('email_quote',isset($data) ? $data : NULL,true);
		
		# send email
		$email_data = array(
					'to' => $input['email'],
					# 'to' => 'kaushtuv@propagate.com.au',
					'bcc' => 'team@propagate.com.au',
					'from' => 'shoebooks@staffbooks.systems',
					'from_text' => 'StaffBooks | ShoeBooks - smarter roster to payroll',
					'subject' => 'StaffBooks | ShoeBooks - Quote ' . $data['quote_id'],
					'message' => $email_msg
					);
		modules::run('email/send_email',$email_data);
		
		
		echo $quote;
	}
	
	
	# old function where the frontend had multiple options
	# kept for reference
	function _old_func_get_quote()
	{
		$input = $this->input->post();
		
		# default values
		$cost = 4;
		$no_of_site = 1;
		
		$avg_staff = $input['avg_staff'];

		
		switch($input['you_package']){
			case 'roster-only':
				$cost = 4;
			break;
			
			case 'payroll-only':
				$cost = 2;
			break;
			
			case 'both':
				$cost = 6;
			break;	
		}
		if($input['we_package'] == 'yes'){
			$cost = 12;	
		}
		if(($input['no_of_sites'])){
			$no_of_site = $input['no_of_sites'];	
		}
		
		# price
		$price = $cost * $avg_staff;
		
		# discount
		if($no_of_site > 10){
			$discount = $price * 0.10;
		}else if($no_of_site > 25){
			$discount = $price * 0.25;	
		}else{
			$discount = 0;
		}
		
		# get final price
		$final_price = $price - $discount;
		$data['price'] = number_format($final_price,2);
		$data['input'] = $input;
		$data['quote_id'] = time();
		
		# html for web
		$quote = $this->load->view('quote_result',isset($data) ? $data : NULL,true);
		
		#html for email
		$email_msg = $this->load->view('email_quote',isset($data) ? $data : NULL,true);
		
		# send email
		$email_data = array(
					'to' => $input['email'],
					#'to' => 'kaushtuv@propagate.com.au',
					'bcc' => 'team@propagate.com.au',
					'from' => 'quote@staffbooks.system',
					'from_text' => 'StaffBooks | ShoeBooks - smarter roster to payroll',
					'subject' => 'StaffBooks | ShoeBooks - Quote ' . $data['quote_id'],
					'message' => $email_msg
					);
		modules::run('email/send_email',$email_data);
		
		
		echo $quote;
	}
	

	
}