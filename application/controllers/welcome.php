<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 */
		function __construct()
		{
			parent::__construct();

			$this->config->load('gsl_config');
		}
	public function index()
	{
		$body='welcome_message';
		$this->load->view($this->config->item('head'));
		$this->load->view($body);
		$this->load->view($this->config->item('footer'));
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */