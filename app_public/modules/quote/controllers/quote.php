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

			default:
				$this->main_view();
				break;
		}
	}
	
	function main_view()
	{
		$this->load->view('main_view', isset($data) ? $data : NULL);
	}
	
	
}