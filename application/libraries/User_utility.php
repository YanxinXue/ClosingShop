<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| 用户API操作工具集合
| -------------------------------------------------------------------
*/

class User_utility{

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
	/ 获取用户相关信息
	/ -----------------------------
	*/	
	public function get_user_taobao($nick)
	{
		$postfields= array('method'=>'taobao.user.get',
							'access_token'=>$this->CI->session->userdata('access_token'),
							'format'=>'json',
							'v'=>'2.0',
							'fields'=>'user_id,uid,nick,sex,buyer_credit,seller_credit,location,created,last_visit,birthday,type,status,alipay_no,alipay_account,alipay_account,email,consumer_protection,alipay_bind',
							'nick'=>$nick);
		$data = $this->CI->utility_network->get_post_by_json($this->config_data['api_URL'], $postfields);
		if (!$this->CI->utility_network->check_response($data))
			$data = -1;		
		return $data;
	}
}

/* End of file User_utility.php */
/* Location: ./application/libraries/User_utility.php */
