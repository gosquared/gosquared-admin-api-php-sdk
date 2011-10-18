<?php

class func_create_subscription extends GS_ADMIN_SDK_request_model {
	public $mode = 'create_subscription';
	protected $params = array(
	    'user_id',
	    'plan_code',
	    'start_time',
	    'billing_fields'
	);

	public function parse_response($data){
		return new create_subscription_response($data);
	}
}

class create_subscription_response extends GS_ADMIN_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_ADMIN_SDK_Exception(join("\n\n",$this->errors));
		}else{
			// No return
		}
	}
}
