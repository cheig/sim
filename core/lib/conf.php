<?php
namespace core\lib;
use core\myBlog;

class conf {

    static public $conf = array();
    /**
     * @function: get the conf
     * @param $name : conf_file name;
     * @param $file :conf_file;
     */
    static public function get($name,$file)
    {
        if (isset(self::$conf[$file]))
        {
            return self::$conf[$file][$name];
        }
        else
         {
            $temp = Core.'config\\'.$file.'.php';
            if(is_file($temp))
            {
                $conf = include $temp;
                if(isset($conf[$name]))
                {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }
                else
                {
                    throw new \Exception('can not find this function:'.$name);
                 }
            }
            else
                {
                    throw new \Exception('can not find this class:'.$file);
                }
          }
    }

    /**
     * @function get all conf
     * @param $name
     * @param $file
     * @return mixed
     * @throws \Exception
     */
    static public function get_all($file)
    {
        if (isset(self::$conf[$file]))
        {
            return self::$conf[$file];
        }
        else
        {
            $temp = Core.'config\\'.$file.'.php';
            if(is_file($temp))
            {
                $conf = include $temp;
                self::$conf[$file] = $conf;
                return $conf;
            }
            else
            {
                throw new \Exception('can not find'.$file);
            }
        }
    }
}