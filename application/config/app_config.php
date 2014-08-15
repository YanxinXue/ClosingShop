<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| App SETTINGS
| -------------------------------------------------------------------
*/

$config['active_app_config'] = 'product';

$config['test']['oauth_URL'] = 'https://oauth.tbsandbox.com/authorize';
$config['test']['token_URL'] = 'https://oauth.tbsandbox.com/token';
$config['test']['client_id'] = '1023002084';				//AppKey
$config['test']['client_secret'] = 'sandboxf5d0a83adb6ad160d040c74c2';	//AppSecret
$config['test']['response_type'] = 'code';
$config['test']['grant_type'] = 'authorization_code';
$config['test']['redirect_uri'] = 'http://localhost/ClosingShop/index.php/login/check_auth';

$config['product']['oauth_URL'] = 'https://oauth.taobao.com/authorize';
$config['procudt']['token_URL'] = 'https://oauth.taobao.com/token';
$config['product']['client_id'] = '23002084';                            //AppKey
$config['product']['client_secret'] = 'b2970f0f5d0a83adb6ad160d040c74c2';  //AppSecret
$config['product']['response_type'] = 'code';
$config['product']['grant_type'] = 'authorization_code';
$config['product']['redirect_uri'] = 'http://hk.yanxinxue.com/ClosingShop/index.php/login/check_auth';

/* End of file app_config.php */
/* Location: ./application/config/app_config.php */
