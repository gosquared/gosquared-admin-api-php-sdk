<?php

class func_apply_coupon extends GS_ADMIN_SDK_request_model {
	public $mode = 'apply_coupon';
	protected $params = array(
    'user_id',
    'coupon_code'
	);

	public function parse_response($data){
		return new apply_coupon_response($data);
	}
}

class apply_coupon_response extends GS_ADMIN_SDK_Response{

}
?>
