<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| App SETTINGS
| -------------------------------------------------------------------
*/

$config['active_app_config'] = 'test';

$config['test']['oauthURL'] = 'https://oauth.tbsandbox.com/authorize';
$config['test']['client_id'] = '1023002084';
$config['test']['response_type'] = 'code';
$config['test']['redirect_uri'] = 'localhost/ClosingShop/index.php/login/check_auth';


/* End of file app_config.php */
/* Location: ./application/config/app_config.php */