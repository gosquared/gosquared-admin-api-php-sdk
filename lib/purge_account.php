<?php

class func_purge_account extends SDK_request_model {
	public $mode = 'purge_account';
	protected $params = array(
		'email'
	);
	public function parse_response($data){
		return new purge_account_response($data);
	}
}

class purge_account_response extends GS_ADMIN_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_ADMIN_SDK_Exception(join("\n\n",$this->errors));
		}else{
			$this->user_id = $response_data['data']['id'];
		}
	}
}