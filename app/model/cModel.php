<?php
namespace app\model;
use core\lib\model;

/**
 * Class cModel
 * @package app\model
 * Function : selectData() getData() updateData() deleteData()
 * Describe : sql语句规范化
 */
class cModel extends model{
    public $table ='runoob';

    public function selectData(){
        $ret = $this->select($this->table,'*');
        return $ret;
}
    public function getData()
    {
    }

}