<?php

if(!function_exists('curl_init')){
	throw new GS_SDK_Exception("GoSquared SDK requires cURL to be installed in order to run", 100);
}

define('GS_SDK_TRANSPORT_INVALID_RESPONSE', 1);

class GS_SDK_Transport_Exception extends Exception {};

class GS_SDK_Transport {
	private $request;
	public $raw_response;
	function __construct($request){
	    $this->request = $request;
	}
	
	public function exec(){
		$this->ch = curl_init();
		if($this->request->host=='localhost'){
			//$this->request->scheme = "http";
			curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
		}		
		curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 10);	
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_TIMEOUT, 60);
		$post = $this->request->get_post();
		curl_setopt($this->ch, CURLOPT_POST, count($post));
		$post = $this->build_post($post);
		$url = $this->build_url($this->sign_post($post));
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($this->ch, CURLOPT_URL, $url);
		$resp = curl_exec($this->ch);
		$this->raw_response = $resp;
		return $this->process_response($resp);
	}
	
	private function build_url($signed){
		$base =  $this->request->scheme . "://" . $this->request->host . $this->request->endpoint . '?';
                $params = array(
                      'format' => 'json'
                    , 'api_key_hash' => sha1($this->request->api_key)
                    , 'env' => GS_API_ENV
                    , 'payment_env' => GS_API_PAYMENT_ENV
                    , 'debug' => GS_API_DEBUG
                    , 'mode' => $this->request->mode
                    , 'sign' => $signed
                    , 'version' => $this->request->api_version
                );
		$query = http_build_query($params);
                $base .= $query;
                
		return $base;
	}
	
	private function build_post($post){
		$base = '';
		foreach($post as $name=>$value){
			if($value == NULL)continue;
			$base .= '&' . urlencode($name) . "=" . urlencode($value);
		}
		$base .= '&timecode=' . gmdate('Y-m-d\TH:i:s\Z');
		ltrim($base,'&');
		//echo $base;
		return $base;
		
	}
	
	private function sign_post($post){
		return hash_hmac('sha1', $post, $this->request->api_key);
	}
	
	private function process_response($data){
	    $decode = json_decode($data,true);
	    if(!$decode){
		throw new GS_SDK_Transport_Exception('Could not decode response; invalid format', GS_SDK_TRANSPORT_INVALID_RESPONSE);
	    }
		return $this->request->parse_response($decode);
	}
}

?>
