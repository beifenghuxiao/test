<?php
namespace App\Service;
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../../vendor/autoload.php';

class AppLogger
{

    /**
     * 模式一 目前使用
     * 实例化不同的日志类采用了工厂模式。  
     * 具体日志类 继承了 一个 接口类，实现了 日志的 三个方法。
     * 具体日之类使用了 单例模式 防止对象反复创建。
     * 
     * think-log 继承父类，并重写了父类的方法。实现了 日志内容大写转换功能。
     * 
     * ===================
     * 模式二，  未实现
     * 也可以使用  依赖注入方式  注入具体的实例类。  具体实例 可以放入 全局容器中，方便取用。
     * 
     * 针对 修改日志大小写需求，可以使用  装饰模式，或者 代理模式 去处理  think-log实例类
     */
    public static function getLog($type){
        if ($type == "log4php") {
           
            return \App\Util\Logphp::getInstance();
        }else if ($type == "thinkphp") {
            return \App\Util\ThinkphpDec::getInstance();
           
        }
    } 

   
}
