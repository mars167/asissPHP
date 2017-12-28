<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2017/12/4
 * Time: 下午3:25
 */

namespace Assi;

require_once 'SQLhelper.php';
use Assi\SQLhelper;

class Common extends SQLhelper
{

   public  function destorySession() {
        $_SESSION = array();
        if (session_id() != "" || isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 2592000, '/');
        }
        session_destroy();
    }



    public function Safe($string){
        return $string;
    }

}