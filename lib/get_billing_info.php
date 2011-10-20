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
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_ADMIN_SDK_Exception(join("\n\n",$this->errors));
		}else{
			$this->billing_info = $response_data['data'];
		}
	}
}