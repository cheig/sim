<?php
namespace core\lib;
use core\lib\conf;
class log{
    static $class;

    /**
     * @function: 确定存储方式
     */
    static public function init( ){
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    /**
     * @function: log record
     * @param $name   ---record the message into log
     * @param string $file
     */
    static public function log($message,$file = 'log'){
        self::$class->file_log($message,$file);
    }
}