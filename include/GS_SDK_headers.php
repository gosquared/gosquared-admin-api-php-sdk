<?php
class GS_SDK_headers {
	public function create_account($email, $password, $first_name, $last_name, $referring_user=null){
		$req = new create_account_request($email, $password, $first_name, $last_name, $referring_user);
		return $this->exec($req);
	}
	
	public function modify_account($user_id, $email, $password, $first_name, $last_name, $location = null, $twitter_handle =null, $phone_number = null){
		$req = new modify_account_request($user_id, $email, $password, $first_name, $last_name, $location, $twitter_handle, $phone_number);
		return $this->exec($req);
	}
	
	public function purge_account($email){
	    
	}
	
	public function create_site($user_id, $site_name, $site_url){
		$req = new create_site_request($user_id, $site_name, $site_url);
		return $this->exec($req);
	}
	
	public function create_subscription($user_id, $plan_code, $start_time = null){
		$req = new create_subscription_request($user_id, $plan_code, $start_time);
		return $this->exec($req);
	}
	
	public function get_subscription($user_id){
		$req = new get_subscription_request($user_id);
		return $this->exec($req);
	}
	
	public function cancel_subscription($user_id){
		$req = new cancel_subscription_request($user_id);
		return $this->exec($req);
	}
	
	public function reactivate_subscription($user_id){
		$req = new reactivate_subscription_request($user_id);
		return $this->exec($req);
	}
	
	public function modify_subscription($user_id, $plan_code, $timeframe, $trial_ends_at = null){
		$req = new modify_subscription_request($user_id, $plan_code, $timeframe, $trial_ends_at);
		return $this->exec($req);
	}
	
	public function set_account_plan($user_id, $plan_name, $plan_settings=null){
		$req = new set_account_plan_request($user_id, $plan_name, $plan_settings);
		return $this->exec($req);
	}
	
	public function get_billing_info($user_id){
		$req = new get_billing_info_request($user_id);
		return $this->exec($req);
	}
}