<?php

class func_modify_subscription extends GS_ADMIN_SDK_request_model{
	public $mode = 'modify_subscription';
	protected $params = array(
		'user_id',
		'plan_code',
		'timeframe',
	 	'billing_fields'
	);
	public function parse_response($data){
		return new modify_subscription_response($data);
	}
}

class modify_subscription_response extends GS_ADMIN_SDK_Response{

}
