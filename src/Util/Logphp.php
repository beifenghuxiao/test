<?php
namespace App\Util;

class Logphp implements Loginterface{
    private static $logger;
    private static $instance;


    private function __construct()
    {  
      $this->init();
      
    
    }
    //初始化一些东西
    public function init(){
        
        \Logger::configure(dirname(__FILE__).DIRECTORY_SEPARATOR.'log4phpconfig.properties');

        // self::$logger = \Logger::getLogger("Log");
        self::$logger = \Logger::getRootLogger();;
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
       self::$logger->info($message);
    }

    public function debug($message = '')
    {
        self::$logger->debug($message);
    }

    public function error($message = '')
    {
        self::$logger->error($message);
    }
}

