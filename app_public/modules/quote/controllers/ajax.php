<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function get_quote()
	{
		$input = $this->input->post();
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
		echo '$'.number_format($final_price,2);
			
	}
	
}