<?php

class func_purge_account extends GS_ADMIN_SDK_request_model {
	public $mode = 'purge_account';
	protected $params = array(
		'user_id'
	);
	public function parse_response($data){
		return new purge_account_response($data);
	}
}

class purge_account_response extends GS_ADMIN_SDK_Response{

}
