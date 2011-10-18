<?php
class GS_ADMIN_SDK_request_model {
    public $method = 'POST';
    public $mode, $host, $endpoint, $scheme, $api_key;
    
    protected $params = array();
    
    function __construct($args){
		$this->params = array_combine(array_slice($this->params, 0, count($args)), $args);
		foreach($this->params as $pk => $pv){
		    if(!$pv) unset($this->params[$pk]);
		}
	}
    
    public function get_post(){
		return $this->params;
	}
    public function parse_response($data){
	    return $data;
    }
}

?>
