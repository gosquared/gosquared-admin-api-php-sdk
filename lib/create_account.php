<?php

class func_create_account extends GS_ADMIN_SDK_request_model {

    public $mode = 'create_account';
    protected $params = array(
	'email',
	'password',
	'first_name',
	'last_name',
	'referring_user',
	'free_trial_end',
  'referrer'
    );

    public function parse_response($data) {
	return new create_account_response($data);
    }

}

class create_account_response extends GS_ADMIN_SDK_Response {

}
