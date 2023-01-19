<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\AppLogger;

/**
 * Class ProductHandlerTest
 */
class AppLoggerTest extends TestCase
{

    public function testInfoLog()
    {
        $type = 'log4php';
        $logger = AppLogger::getLog($type);

        $logstr = $type.' This is info log message';
        
       $logger->debug($logstr);
       
        // $this->assertEquals($logstr, $logger->info($logstr));
        $path = dirname(__FILE__).DIRECTORY_SEPARATOR.'../../target'.DIRECTORY_SEPARATOR.'daily_'.date("Ymd").'.log';
        $this->assertFileExists($path);
    }


    public function testthinkLog()
    {

        $type = 'thinkphp';
        $logger = AppLogger::getLog($type);

        $logstr = $type.' This is info log message';
        
       $logger->debug($logstr);
       
        // $this->assertEquals($logstr, $logger->info($logstr));
        $path = dirname(__FILE__).DIRECTORY_SEPARATOR.'../../logs'.DIRECTORY_SEPARATOR.date("Ym").DIRECTORY_SEPARATOR.date("d").'_cli.log';
        $this->assertFileExists($path);
        //$this->assertStringMatchesFormatFile($path, strtoupper($logstr));
    }
    
}