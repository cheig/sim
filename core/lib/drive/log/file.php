<?php
namespace  core\lib\drive\log;

use core\lib\conf;

class file
{
    public $path;#日志存储位置

    /**
     * function: get the log path;
     * file constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $temp = conf::get('OPTION','log');
        $this->path = $temp['PATH'];
    }

    public function file_log($message,$file = 'log')
    {
        if(!is_dir($this->path.$file))
        {
            mkdir($this->path.$file,'0777',true);
        }
        $filename = $this->path.'\\'.$file.'\\'.date('YmdH').'.php';
        return file_put_contents($filename, date("Y-m-d H:i:s").json_encode($message).PHP_EOL,
            FILE_APPEND);
    }
}