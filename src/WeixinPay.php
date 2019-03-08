<?php
/**
 * Created by PhpStorm.
 * User: 13057
 * Date: 2019/3/8
 * Time: 16:08
 */
namespace wqpay;

class WeixinPay extends paybase
{
    public function payAction()
    {
        $dis = $this -> dis;
        $dis -> DiscountAction();
        echo 'This is a function to implements payaction by weixin' . PHP_EOL;
    }
}