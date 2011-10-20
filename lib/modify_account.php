<?php

class func_modify_account extends GS_ADMIN_SDK_request_model{
	public $mode = 'modify_account';
	protected $params = array(
		'user_id' ,
		'email' ,
		'password' ,
		'first_name' ,
		'last_name' ,
		'location' ,
		'twitter_handle' ,
		'phone_number'
	);
	
	public function parse_response($data){
		return new modify_account_response($data);
	}
}

class modify_account_response extends GS_ADMIN_SDK_Response{

}
