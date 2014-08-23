<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| App SETTINGS
| -------------------------------------------------------------------
*/

$config['active_app_config'] = 'product';

/*
/ -----------------------------
/ 参数定义说明
/ -----------------------------
/ oauth_URL	验证地址
/ token_URL	获取TOKEN地址
/ api_URL	访问API地址
/ client_id	AppKey
/ client_secret	AppSecret
/ response_type
/ grant_type
/ redirect_url	回调地址
*/

/*
/ -----------------------------
/ 测试环境配置
/ -----------------------------
*/
$config['test']['oauth_URL'] = 'https://oauth.tbsandbox.com/authorize';
$config['test']['token_URL'] = 'https://oauth.tbsandbox.com/token';
$config['test']['api_URL'] = "https://gw.api.tbsandbox.com/router/rest";
$config['test']['client_id'] = '1023010043';				
$config['test']['client_secret'] = 'sandbox502ac58204961225200c1c351';	
$config['test']['response_type'] = 'code';
$config['test']['grant_type'] = 'authorization_code';
$config['test']['redirect_uri'] = 'http://localhost/ClosingShop/index.php/login/check_auth';

/*
/ -----------------------------
/ 线上环境配置
/ -----------------------------
*/
$config['product']['oauth_URL'] = 'https://oauth.taobao.com/authorize';
$config['product']['token_URL'] = 'https://oauth.taobao.com/token';
$config['product']['api_URL'] = "https://gw.api.taobao.com/router/rest";
$config['product']['client_id'] = '23002084';                           
$config['product']['client_secret'] = 'b2970f0f5d0a83adb6ad160d040c74c2'; 
$config['product']['response_type'] = 'code';
$config['product']['grant_type'] = 'authorization_code';
$config['product']['redirect_uri'] = 'http://hk.yanxinxue.com/ClosingShop/index.php/login/check_auth';

/* End of file app_config.php */
/* Location: ./application/config/app_config.php */
