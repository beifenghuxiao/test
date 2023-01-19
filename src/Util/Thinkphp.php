<?php
namespace App\Util;
use think\facade\Log;

class Thinkphp implements Loginterface{
    private static $logger;
    private static $instance;


    private function __construct()
    {  
        
        $this->init();
        
       
    }

    //初始化一些东西
    public function init(){
        Log::init([
            'default'	=>	'file',
            'channels'	=>	[
                'file'	=>	[
                    'type'	=>	'file',
                    'path'	=>	'./logs/',
                ],
            ],
        ]);
    }
    

    public static function getInstance()
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function info($message = '')
    {
       
        Log::info($message);
    }

    public function debug($message = '')
    {
        Log::debug($message);
    }

    public function error($message = '')
    {
        Log::error($message);
    }
}