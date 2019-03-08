<?php
/**
 * Created by PhpStorm.
 * User: 13057
 * Date: 2019/3/8
 * Time: 16:12
 */
namespace wqpay;

class ZhifubaoPay extends paybase
{
    public  function payAction()
    {
        $this -> dis -> DiscountAction();
        echo 'This is a function to implement payaction by zhifubao' . PHP_EOL;
    }
}