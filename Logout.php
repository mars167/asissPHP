<?php
require_once 'Common.php';
use Assi\Common;
session_start();
if(isset($_SESSION['username'])){
    $aciton  = new Common();
    $aciton->destorySession();

    header("Location:Login.php");
    exit();
}
?>