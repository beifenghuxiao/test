<?php
namespace App\Util;

use App\Util\Thinkphp;


class ThinkphpDec extends Thinkphp{
   
    private static $instance;

    
    private function __construct()
    {
        parent::init();
    }
    public static function getInstance()
    {
        if (! (static::$instance instanceof static)) {
            static::$instance = new static();
        }
        return static::$instance;
    }



    public function info($message = '')
    {
        
        $message = strtoupper($message);
       
        parent::info($message);
    }

    public function debug($message = '')
    {
        $message = strtoupper($message);
        parent::debug($message);
    }

    public function error($message = '')
    {
        $message = strtoupper($message);
        parent::error($message);
    }


}