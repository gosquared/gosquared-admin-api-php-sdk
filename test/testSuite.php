<?php
require_once('/PHPUnit/Framework.php');
require_once('../sdk.class.php');

class GoSquaredAdminSDKTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $this->_sdk = new GS_ADMIN_SDK();
    }
    
    public function testCreateAccount(){
        
    }
    
}
?>
