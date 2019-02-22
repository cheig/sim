<?php

namespace core\lib;
use \core\lib\conf;
class model extends \Medoo\Medoo {
    public $conn;
    public function __construct()
    {
        $database = conf::get_all('database');
        parent::__construct($database);
    }
}