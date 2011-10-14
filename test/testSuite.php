<?php
require_once(__DIR__.'/../sdk.php');

class GoSquaredAdminSDKTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $this->_sdk = new GS_ADMIN_SDK();
    }
    
    /**
     * @dataProvider providerAccountAttributes
     */
    public function testCreateAccount($email, $password, $first_name, $last_name, $referring_user = null, $free_trial_end = null){
        $r = call_user_func_array(array($this->_sdk, 'create_account'), func_get_args());
        $this->assertContainsOnly('object', $r);
    }
    
    public function providerAccountAttributes(){
        $email = 'address@totallynotrandom.com';
        $password = 'testpassword';
        $first_name = 'Bob';
        $last_name = 'Jenkins';
        return array(
             array(
                 $email
                ,$password
                ,$first_name
                ,$last_name
                ,null
                ,null
             )
        );
    }
    
}
?>