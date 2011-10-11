<?php

class func_get_billing_info extends SDK_request_model {
	public $mode = 'get_billing_info';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_billing_info_response($data);
	}
}

class get_billing_info_response extends GS_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_SDK_Exception(join("\n\n",$this->errors));
		}else{
			$this->billing_details = $response_data['data'];
		}
	}
}
