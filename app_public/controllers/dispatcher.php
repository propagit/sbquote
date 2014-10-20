<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller: Dispatcher
 * Description: control main flow of the app
 * @author: kaushtuvgurung@gmail.com
 */

class Dispatcher extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->quote_dispacher();
	}
	
	function quote_dispacher($method='', $param1='',$param2='',$param3='',$param4='')
	{
		if ( strpos($method, 'ajax') !== false)
		{
			echo modules::run('quote/' . $method . '/' . $param1, $param2, $param3, $param4); exit();	
		}
		
		$content = modules::run('quote', $method, $param1, $param2, $param3, $param4);
		$this->template->set_template('quote');
		$this->template->write('title', ucwords($method));
		$this->template->write('content', $content);
		$this->template->render();
	}
	
		
}

/* End of file dispatcher.php */
/* Location: ./application/controllers/dispatcher.php */