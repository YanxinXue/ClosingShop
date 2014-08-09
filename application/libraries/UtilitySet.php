<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Set of Utilities
| -------------------------------------------------------------------
*/

class UtilitySet{
	public function redirect_get($url, $params_data)
	{
		$get_url = $url.'?';
		foreach ($params_data as $key => $value) {
			$get_url = $get_url.$key.'='.$value.'&';
		}
		$get_url = substr($get_url,0,-1);
		redirect($get_url);
	}
	
	public function JSON_post($url, $postfields)
	{
		$post_data = '';
		foreach($postfields as $key => $value){
			$post_data = $post_data.$key.'='.urlencode($value).'&';
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		//指定post数据
		curl_setopt($ch, CURLOPT_POST, true);
		//添加变量
		curl_setopt($ch, CURLOPT_POSTFIELDS, substr($post_data,0,-1));
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}
}

/* End of file UtilitySet.php */
/* Location: ./application/libraries/UtilitySet.php */