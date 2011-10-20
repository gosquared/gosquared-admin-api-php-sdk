<?php

class func_cancel_subscription extends GS_ADMIN_SDK_request_model {
	public $mode = 'cancel_subscription';
	protected $params = array(
	    'user_id'
	);
	
	public function parse_response($data){
		return new cancel_subscription_response($data);
	}
}

class cancel_subscription_response extends GS_ADMIN_SDK_Response{
}
