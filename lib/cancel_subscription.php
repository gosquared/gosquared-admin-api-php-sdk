<?php

class func_cancel_subscription extends SDK_request_model {
	public $mode = 'cancel_subscription';
	protected $params = array(
	    'user_id'
	);
	
	public function parse_response($data){
		return new cancel_subscription_response($data);
	}
}

class cancel_subscription_response extends GS_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_SDK_Exception(join("\n\n",$this->errors));
		}else{
			//$this->subscription = $response_data['data'];
		}
	}
}
