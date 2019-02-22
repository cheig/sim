<?php

namespace core;
class myBlog
{
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        \core\lib\log::init();
        \core\lib\log::log($_SERVER);
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP . 'ctrl\\' . $ctrlClass . 'Ctrl.php';
        $control = '\\' . MODULE . '\\ctrl\\' . $ctrlClass . 'Ctrl';
        if (isset($ctrlFile)) {
            include $ctrlFile;
            $actionCtrl = new $control();
            $actionCtrl->$action();
            \core\lib\log::log('ctrl'.$ctrlClass.'    '.'action'.$action);
        } else {
            throw new \Exception('找不到控制器' . $control);
        }
    }

    static function load($class)
    {
        //自动加载类库，意思是在类库没有的时候自动加载
        //一般情况下引入类的方法是：new \core\route();
        //$class = '\core\route';这样的路径，下面需要把这路径转换成绝对路径
        //加载的类的路径例子：myBlog.'/core/route.php';
        if (isset($classMap[$class])) {
            return false;
        } else {
            $class = str_replace('\\', '/', $class);  //更改路径
            $classPath = myBlogPath . '/' . $class . '.php';
            if (is_file($classPath)) {
                include $classPath;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    /**
     * @function 视图分配，分配传输的数据
     * @param $name  下标
     * @param $data  数据
     */
    public function assign($name,$data)
    {
        $this->assign[$name] = $data;
    }

    public function display($file)
    {

        $temp = APP.'/views/'.$file;
        if(is_file($temp))
        {
//            require_once 'vendor\\autoload.php';
            $loader = new \Twig_Loader_Filesystem(APP.'\views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => myBlogPath.'\cache\twig',
                'debug' => DEBUG
            ));
            $template = $twig->load($file);
            $template->display($this->assign ? $this->assign : array());
        }
    }
}