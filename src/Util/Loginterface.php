<?php
namespace App\Util;

interface Loginterface {
    
    public function info($message = '');

    public function debug($message = '');
   
    public function error($message = '');
    
}