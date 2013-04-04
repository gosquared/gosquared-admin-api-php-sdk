<?php

class func_create_subscription extends GS_ADMIN_SDK_request_model {
	public $mode = 'create_subscription';
	protected $params = array(
	    'user_id',
	    'plan_code',
	    'start_time',
	    'billing_fields',
	    'promo_code',
	    'currency'
	);

	public function parse_response($data){
		return new create_subscription_response($data);
	}
}

class create_subscription_response extends GS_ADMIN_SDK_Response{

}
