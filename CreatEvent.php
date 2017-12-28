<?php
require_once 'Schedule.class.php';

use Assi\Schedule;

session_start();

if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];
    $title = $_GET['title'];

    $action = new  Schedule($uid);
    $res = $action->query_dml("INSERT INTO schedule(sch_title,sch_status,sch_uid) VALUES ('$title',0,'$uid')");


    header("Location:Schedule.php");
    exit();
}

?>