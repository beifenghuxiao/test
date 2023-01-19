<?php

namespace Test\App;

use App\App\Demo;
use App\Util\HttpRequest;
use PHPUnit\Framework\TestCase;


class DemoTest extends TestCase
{

    public function test_foo()
    {
        $demo = new Demo('',new HttpRequest());
        $res = $demo->foo();
        $this->assertEquals("bar", $res);
    }

    public function test_get_user_info()
    {
        $demo = new Demo('',new HttpRequest());
        $res = $demo->get_user_info();

        // if(is_null($res)){
        //     $this->assertNull( $res);
        // }else{
            
        // }
        $this->assertIsArray( $res);
        

    }
}
