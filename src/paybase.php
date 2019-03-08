<?php
/**
 * Created by PhpStorm.
 * User: 13057
 * Date: 2019/3/8
 * Time: 15:16
 */
namespace wqpay;
class paybase
{
    public $type;
    public function __construct()
    {
        $this -> type = 1;
    }

    /**
     *
     */
    public function index()
    {
        echo $this -> type . PHP_EOL;
        echo 'hello world';
    }
}