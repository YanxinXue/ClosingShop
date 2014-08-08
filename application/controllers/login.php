<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function auth()
	{
		//TODO 判断用户是否已经授权，没有授权跳转到授权页面
		$this->config->load('app_config');
		$this->load->library('utilitySet');
		$this->load->helper('url');
				
		$config_data = $this->config->item($this->config->item('active_app_config'));
		redirect($this->utilityset->url_joint($config_data), 'location');
	}
	
	public function check_auth()
	{
		//检查授权，失败重新授权，成功保存授权记录
		$this->load->view('login');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */