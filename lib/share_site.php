<?php

class func_share_site extends GS_ADMIN_SDK_request_model{
	public $mode = 'share_site';
	protected $params = array(
    'site',
    'user_id',
    'recipient'
	);
	
	public function parse_response($data){
		return new share_site_response($data);
	}
}

class share_site_response extends GS_ADMIN_SDK_Response{

}
