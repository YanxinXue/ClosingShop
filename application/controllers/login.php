<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function auth()
	{
		//TODO 判断用户是否已经授权，没有授权跳转到授权页面		
		$this->load->library('utilitySet');		
		$this->load->helper('url');
		
		$config_data = $this->_get_app_config();
		$getfields = array('client_id'=>$config_data['client_id'],
						'response_type'=>$config_data['response_type'],
						'redirect_uri'=>$config_data['redirect_uri']);
		$this->utilityset->redirect_get($config_data['oauth_URL'], $getfields);
	}
	
	public function check_auth()
	{
		$this->load->library('utilitySet');	
		
		$params_data = $this->input->get(null, TRUE);
		if (isset($params_data['code']))
		{
			$config_data = $this->_get_app_config();
			$postfields= array('grant_type'=>$config_data['grant_type'],
							'client_id'=>$config_data['client_id'],
							'client_secret'=>$config_data['client_secret'],
							'code'=>$params_data['code'],
							'redirect_uri'=>$config_data['redirect_uri']);
			$result_JSON = $this->utilityset->JSON_post($config_data['token_URL'], $postfields);
			$params_data = json_decode($result_JSON, TRUE);			
			if (isset($params_data['access_token']))
			{
				//TODO
				echo($result_JSON);
				/*
				处理以下的内容
				{
					w2_expires_in: 1800,
					taobao_user_id: "3638530058",
					taobao_user_nick: "sandbox_sjxyx",
					w1_expires_in: 12960000,
					re_expires_in: 15552000,
					r2_expires_in: 259200,
					expires_in: 12960000,
					token_type: "Bearer",
					refresh_token: "6200402de5ZZ4cb9486b53764fd20200d35d9b87886085b3638530058",
					access_token: "620170273egi63545c4cfe48eba48020b87ff36a9d82f3a3638530058",
					r1_expires_in: 12960000
				}
				*/
				return 0;
			}			
		}	
		if (isset($params_data['error']))
			$error_message['error'] = $params_data['error'];
		if (isset($params_data['error_description']))
			$error_message['error_description'] = $params_data['error_description'];
		$this->load->view('login\fail', $error_message);
	}
	
	private function _get_app_config()
	{
		$this->config->load('app_config');
		return $this->config->item($this->config->item('active_app_config'));
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */