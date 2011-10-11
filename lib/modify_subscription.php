<?php

class func_modify_subscription extends SDK_request_model{
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

class modify_subscription_response extends GS_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_SDK_Exception(join("\n\n",$this->errors));
		}else{
			// No return
		}
	}
}
