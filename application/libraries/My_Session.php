<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Session Extend tools
| -------------------------------------------------------------------
*/

class MY_Session extends CI_Session {

	public function __construct()
    {
		parent::__construct();
    }
	
	public function login_check()
	{
		if (!$this->userdata('taobao_user_id'))
		{
			redirect('login/auth');
		}
	}
}

/* End of file MY_Session.php */
/* Location: ./application/libraries/MY_Session.php */