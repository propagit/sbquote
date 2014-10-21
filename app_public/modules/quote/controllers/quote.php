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
	
	function result()
	{
		$data['price'] = number_format(72,2);
		$data['input'] = array('name' => 'James Blunfield' , 'phone' => '0421-333-367', 'email' => 'james@example.com');
		$data['quote_id'] = time();
	
		$this->load->view('quote_result_template', isset($data) ? $data : NULL);	
	}
	
	
	
}