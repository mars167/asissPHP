<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2017/12/4
 * Time: 下午3:09
 */
namespace Assi;

require_once 'Common.php';
use Assi\Common;

class LoginForm extends Common
{
    public $uid;
    public $pass;
    public function validatePassword($pass){
        $salt1='ASd';
        $salt2=')(sdf0';
        $token=hash('ripemd128',"$salt1$pass$salt2");

    }
}