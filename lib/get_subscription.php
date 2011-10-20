<?php

class func_get_subscription extends GS_ADMIN_SDK_request_model {
	public $mode = 'get_subscription';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_subscription_response($data);
	}
}

class get_subscription_response extends GS_ADMIN_SDK_Response{

}
