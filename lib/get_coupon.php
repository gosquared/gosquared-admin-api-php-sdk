<?php

class func_get_coupon extends GS_ADMIN_SDK_request_model {
	public $mode = 'get_coupon';
	protected $params = array(
	    'user_id'
	);

	public function parse_response($data){
		return new get_coupon_response($data);
	}
}

class get_coupon_response extends GS_ADMIN_SDK_Response{

}
?>
