<?php

class GS_ADMIN_SDK_core{
    
    public function debug($str){
        if(GS_ADMIN_SDK_DEBUG){
            $this->stdout($str);
        }
    }
    
    public function stdout($str){
//        if(PHP_SAPI == 'cli'){
//            // TODO: output with colours :-)
//        }
        echo "\r\n$str";
    }
    
}

?>
