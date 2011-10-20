<?php

class func_create_site extends GS_ADMIN_SDK_request_model{
	public $mode = 'create_site';
	protected $params= array(
		'user_id',
		'site_name',
		'site_url',
	);

	public function parse_response($data){
		return new create_site_response($data);
	}
}

class create_site_response extends GS_ADMIN_SDK_Response{

}
