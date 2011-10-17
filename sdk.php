<?php
if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.inc.php'))
{
  @include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config.inc.php';
}

/** include all libs **/
array_map(function($path){
  require_once $path;    
}, array_merge(glob(__DIR__.'/include/*.php'), glob(__DIR__.'/lib/*.php')));

class GS_ADMIN_SDK_Exception extends Exception {};

class GS_ADMIN_SDK extends GS_ADMIN_SDK_core {
  private $host, $api_key, $endpoint, $scheme;
  public $transport;

  function __construct(){
    if(!defined('GS_ADMIN_SDK_API_KEY')) throw new GS_ADMIN_SDK_Exception("Could not load config. Please make sure you've set up your config.inc.php file in the sdk directory: ".__DIR__);
    $this->set_auth();
    $this->set_scheme();
    $this->set_host();
    $this->set_endpoint();
    $this->set_api_version();
  }

  public function set_auth($api_key = false){
    if(!$api_key) $api_key = GS_ADMIN_SDK_API_KEY;
    $this->api_key = $api_key;
  }

  public function set_endpoint($endpoint = false){
    if(!$endpoint) $endpoint = GS_ADMIN_SDK_API_ENDPOINT;
    $this->endpoint = $endpoint;
  }

  public function set_host($host = false){
    if(!$host) $host = GS_ADMIN_SDK_API_HOST;
    $this->host = $host;
  }

  public function set_scheme($scheme = false){
    if(!$scheme) $scheme = GS_ADMIN_SDK_API_REQUEST_SCHEME;
    $this->scheme = $scheme;
  }

  public function set_api_version($version = false){
    if(!$version) $version = GS_ADMIN_SDK_API_VERSION;
    $this->api_version = $version;
  }

  public function exec($request){
    $req = new GS_ADMIN_SDK_Transport($request);
    $this->transport = $req;
    return $req->exec();
  }

  public function __call($name, $args){
    try{
      $req = $this->init_request($name, $args);
      return $this->exec($req);
    }
    catch(GS_ADMIN_SDK_request_model_exception $e){
      return false;
    }
  }

  private function init_request($name, $args){
    $func = 'func_'.$name;
    $req = new $func($args);
    $req->host = $this->host;
    $req->scheme = $this->scheme;
    $req->endpoint = $this->endpoint;
    $req->api_key = $this->api_key;
    $req->api_version = $this->api_version;
    return $req;
  }


}
