<?php

namespace app\ctrl;

use app\model\cModel;
use app\model\messageModel;
use core\lib\model;
use core\myBlog;
use \core\lib\drive\log\file;

class indexCtrl extends \core\myBlog
{
    public function index()
    {
        $mes = new messageModel();
        $data = $mes->getAll();
        $this->assign('data',$data);
        $this->display('showMessage.html');
    }

    public function test()
    {
        $this->display('message.html');
    }

    public function show()
    {
        $this->display('showMessage.html');
    }
    public function save()
    {
        $data['title'] = post('name','title','int');
        $data['content'] = post('content');
        $data['createtime'] = time();
        p($data);
        $mes = new messageModel();
        $ret = $mes->insertData($data);
        if($ret){
            jump('show');
        } else {
            p('error');
        }
    }
}