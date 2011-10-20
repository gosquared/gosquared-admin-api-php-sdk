<?php

class func_reactivate_subscription extends GS_ADMIN_SDK_request_model {
	public $mode = 'reactivate_subscription';
	protected $params = array(
	    'user_id'
	);
	public function parse_response($data){
		return new reactivate_subscription_response($data);
	}
}

class reactivate_subscription_response extends GS_ADMIN_SDK_Response{

}
