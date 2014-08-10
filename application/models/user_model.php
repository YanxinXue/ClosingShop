<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	var $user_id = '';
	var $user_nick = '';
	var $token_type = '';
	var $refresh_token = '';
	var $access_token = '';
	var $expires_in = '';
	var $re_expires_in = '';
	var $r1_expires_in = '';
	var $r2_expires_in = '';
	var $w1_expires_in = '';
	var $w2_expires_in = '';
	var $gmt_create = '';
	var $gmt_update = '';

	public function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->helper('date');
    }
	
	public function select_user_by_taobao_user_id($taobao_user_id)
	{
		return $this->db->get_where('user', array('taobao_user_id' => $taobao_user_id))->result_array();
	}
	
	public function insert_user($params_data)
    {
		$params_data['gmt_create'] = unix_to_human(now(), TRUE, 'eu');
		$params_data['gmt_update'] = unix_to_human(now(), TRUE, 'eu');
        return $this->db->insert('user', $params_data);
    }
	
	public function update_user($params_data)
    {
		$params_data['gmt_update'] = unix_to_human(now(), TRUE, 'eu');
        return $this->db->update('user', $params_data, array('taobao_user_id' => $params_data['taobao_user_id']));
    }

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */