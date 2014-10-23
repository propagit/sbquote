<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quote extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index($method='', $param1='', $param2='')
	{
		switch($method)
		{
			case 'result':
				$this->result();
			break;
			default:
				$this->main_view();
			break;
		}
	}
	
	function main_view()
	{
		$this->load->view('main_view', isset($data) ? $data : NULL);
	}
	
	function generate_quote($params)
	{
		# package pricing
		$package = array( '0-50' => array(
									'price_staffbooks' => 2,
									'price_shoebooks' => 4,
									'payroll_processing' => 6,
									'discount' => false,
									'comment' => ''
								),
						'51-300' => array(
									'price_staffbooks' => 2,
									'price_shoebooks' => 3,
									'payroll_processing' => 5.5,
									'discount' => false,
									'comment' => ''
								),
						'300-above'  => array(
									'price_staffbooks' => 2,
									'price_shoebooks' => 3,
									'payroll_processing' => 5.5,
									'discount' => true,
									'comment' => 'Your are eligible for massive discount, please contact us for a formal quote request.'
								),
						);
		
		
		
		$no_of_sites = $params['no_of_sites'];
		$avg_staff = $params['avg_staff'];
		
		# get total staffs
		$total_staff = $no_of_sites * $avg_staff;
		
		# get package based on total staff
		if($total_staff <= 50 ){
			$pricing = $package['0-50'];
		}elseif($total_staff > 50 && $total_staff <= 300){
			$pricing = $package['51-300'];	
		}else{
			$pricing = $package['300-above'];	
		}
		
		#calcuate cost
		switch($params['package']){
			case 'software-only':
				$price = $pricing['price_staffbooks']+$pricing['price_shoebooks'];
				$package = 'software and you process your payrole';
			break;
			
			case 'sofware-and-payroll':
				$price = $pricing['price_staffbooks']+$pricing['price_shoebooks']+$pricing['payroll_processing'];
				$package = 'software and we process your payrole';
			break;	
		}
		
		$total_price = $price * $total_staff;
		$price_per_franchise = $total_price/$no_of_sites;
		
		$quote = array(
						'total_price' => number_format($total_price,2),
						'price_per_franchise' => number_format($price_per_franchise,2),
						'comment' => $pricing['comment'],
						'package' => $package
					);
		return $quote;		
	}
	
	function result()
	{
		$data['price'] = number_format(72,2);
		$data['input'] = array('name' => 'James Blunfield' , 'phone' => '0421-333-367', 'email' => 'james@example.com');
		$data['quote_id'] = time();
	
		$this->load->view('quote_result_template', isset($data) ? $data : NULL);	
	}
	
	
	
}