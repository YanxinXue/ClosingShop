<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function auth()
	{		
		$this->load->library('auth_utility');
		redirect($this->auth_utility->get_auth_URL());
	}
	
	public function check_auth()
	{
		$this->load->library('auth_utility');
		$this->load->helper('date');
		
		$params_data = $this->input->get(null, TRUE);
		$params_data['error_description'] = $this->_get_errror_message('login_fail');
		$time_now = now();
		if (isset($params_data['code']))
		{
			$params_data = $this->auth_utility->get_auth($params_data['code']);
			if (isset($params_data['access_token']))
			{
				$params_data['expires_in'] = unix_to_human($time_now + $params_data['expires_in'], TRUE, 'eu');
				$params_data['re_expires_in'] = unix_to_human($time_now + $params_data['re_expires_in'], TRUE, 'eu');
				$params_data['r1_expires_in'] = unix_to_human($time_now + $params_data['r1_expires_in'], TRUE, 'eu');
				$params_data['r2_expires_in'] = unix_to_human($time_now + $params_data['r2_expires_in'], TRUE, 'eu');
				$params_data['w1_expires_in'] = unix_to_human($time_now + $params_data['w1_expires_in'], TRUE, 'eu');
				$params_data['w2_expires_in'] = unix_to_human($time_now + $params_data['w2_expires_in'], TRUE, 'eu');
				$this->load->model('User_model');
				if (count($this->User_model->select_user_by_taobao_user_id($params_data['taobao_user_id'])) == 0)
				{
					$database_result = $this->User_model->insert_user($params_data);
				}else
				{
					$database_result = $this->User_model->update_user($params_data);
				}
				if ($database_result)
				{
					$this->session->set_userdata($params_data);
					redirect('main');
					return 0;
				}else
				{
					$params_data['error_description'] = $this->_get_errror_message('database_fail');
				}
			}			
		}	
		if (isset($params_data['error_description']))
			$error_message['error_description'] = $params_data['error_description'];
		$this->load->view('login\fail', $error_message);
	}
	
	private function _get_app_config()
	{
		$this->config->load('app_config');
		return $this->config->item($this->config->item('active_app_config'));
	}
	
	private function _get_errror_message($message_code)
	{
		$this->config->load('error_message_config');
		return $this->config->item($message_code);
	}
	
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
