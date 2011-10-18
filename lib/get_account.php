<?php

class func_get_account extends GS_ADMIN_SDK_request_model {
	public $mode = 'get_account';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_account_response($data);
	}
}

class get_account_response extends GS_ADMIN_SDK_Response{
	function __construct($response_data){
		parent::__construct($response_data);
		$this->succeeded = $response_data['success'];
		if(!$this->succeeded){
			//throw new GS_SDK_Exception(join("\n\n",$this->errors));
		}else{
			$this->account = $response_data['data'];
		}
	}
}
?>
