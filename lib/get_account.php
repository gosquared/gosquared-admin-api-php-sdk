<?php

class func_get_account extends GS_ADMIN_SDK_request_model {
	public $mode = 'get_account';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_account_response($data);
	}
}

class get_account_response extends GS_ADMIN_SDK_Response{

}
?>
