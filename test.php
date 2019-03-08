<?php
/**
 * Created by PhpStorm.
 * User: 13057
 * Date: 2019/3/6
 * Time: 11:37
 */
require "./vendor/autoload.php";
$wx = new wqpay\WeixinPay();
$wx -> setDisBehavior(new \wqpay\IntegralDiscount());
$wx -> payAction();
$zfb = new \wqpay\ZhifubaoPay();
$zfb -> setDisBehavior(new \wqpay\CashDiscount());
$zfb -> payAction();