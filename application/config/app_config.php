<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| App SETTINGS
| -------------------------------------------------------------------
*/

$config['active_app_config'] = 'test';

$config['test']['oauth_URL'] = 'https://oauth.tbsandbox.com/authorize';
$config['test']['token_URL'] = 'https://oauth.tbsandbox.com/token';
$config['test']['client_id'] = '1023002084';
$config['test']['client_secret'] = 'sandboxf5d0a83adb6ad160d040c74c2';
$config['test']['response_type'] = 'code';
$config['test']['grant_type'] = 'authorization_code';
$config['test']['redirect_uri'] = 'http://localhost/ClosingShop/index.php/login/check_auth';

/* End of file app_config.php */
/* Location: ./application/config/app_config.php */