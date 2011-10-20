<?php

class func_set_billing_info extends GS_ADMIN_SDK_request_model {
	public $mode = 'set_billing_info';
	protected $params = array(
	    'user_id'
      , 'billing_fields'
	);

  public function __construct($args){
    $args[1] = json_encode($args[1]);
    parent::__construct($args);
  }

	public function parse_response($data){
		return new set_billing_info_response($data);
	}
}

class set_billing_info_response extends GS_ADMIN_SDK_Response{

}
