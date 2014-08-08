<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| Set of Utilities
| -------------------------------------------------------------------
*/

class UtilitySet{
	public function url_joint($params_data)
	{
		if (isset($params_data['oauthURL']))
		{
			$result = $params_data['oauthURL']."?";
			foreach ($params_data as $key => $value) 
			{
				if (strcmp($key,'oauthURL'))
					$result = $result.$key."=".$value."&";
			}
			$result = substr($result,0,strlen($result)-1);
		}else
		{
			$result = null;
		}
		return $result;
	}
}

/* End of file UtilitySet.php */
/* Location: ./application/libraries/UtilitySet.php */