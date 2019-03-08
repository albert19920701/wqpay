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
    public $dis;

    public function setDisBehavior(DiscountBehavior $discountBehavior)
    {
        $this -> dis = $discountBehavior;
    }
    public function payAction(){}
}