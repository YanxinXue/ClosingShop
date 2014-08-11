<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->session->login_check();			
	}

	public function index()
	{
		//TODO 添加主操作页面
		$this->load->view('welcome_message');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */