<?php
namespace app\model;
use core\lib\model;

/**
 * Class cModel
 * @package app\model
 * Function : selectData() getData() updateData() deleteData()
 * Describe : sql语句规范化
 */
class messageModel extends model
{
    public $table ='message';

    public function selectData(){
        $ret = $this->select($this->table,'*');
        return $ret;
}
    public function getAll(){
        $ret = $this->select($this->table,'*');
        return $ret;
    }
    public function getData()
    {
    }
    public function insertData($data){
        return $this->insert($this->table,$data);
    }

}