<?php

class func_deactivate_account extends GS_ADMIN_SDK_request_model {
	public $mode = 'deactivate_account';
	protected $params = array(
		'user_id'
	);
	public function parse_response($data){
		return new deactivate_account_response($data);
	}
}

class deactivate_account_response extends GS_ADMIN_SDK_Response{

}
