<?php

class func_get_billing_info extends GS_ADMIN_SDK_request_model {
	public $mode = 'get_billing_info';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_billing_info_response($data);
	}
}

class get_billing_info_response extends GS_ADMIN_SDK_Response{

}
