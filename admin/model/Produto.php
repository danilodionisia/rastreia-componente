<?php 
    namespace admin\model\Produto;

use admin\model\DAL\DAL;

class Produto extends DAL{

    protected $id, $produto, $proprietario, $status, $data;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}