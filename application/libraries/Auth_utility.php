<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| 授权API操作工具集合
| -------------------------------------------------------------------
*/

class Auth_utility{

	var $CI;
	var $config_data;

	function __construct()
	{
		$this->CI =& get_instance();		
		$this->CI->config->load('app_config');
		$this->config_data = $this->CI->config->item($this->CI->config->item('active_app_config'));
		$this->CI->load->library('utility_network');
	}
	
	/*
	/ -----------------------------
	/ 获得授权页面URL
	/ -----------------------------
	*/
	public function get_auth_URL()
	{
		$getfields = array('client_id'=>$this->config_data['client_id'],
						'response_type'=>$this->config_data['response_type'],
						'redirect_uri'=>$this->config_data['redirect_uri']);
		return $this->CI->utility_network->joint_url($this->config_data['oauth_URL'], $getfields);
	}
	
	/*
	/ -----------------------------
	/ 通过授权码获得Token
	/ -----------------------------
	*/	
	public function get_auth($code)
	{
		$postfields= array('grant_type'=>$this->config_data['grant_type'],
							'client_id'=>$this->config_data['client_id'],
							'client_secret'=>$this->config_data['client_secret'],
							'code'=>$code,
							'redirect_uri'=>$this->config_data['redirect_uri']);
		return $this->CI->utility_network->get_post_by_json($this->config_data['token_URL'], $postfields);
	}
}

/* End of file Auth_utility.php */
/* Location: ./application/libraries/Auth_utility.php */
