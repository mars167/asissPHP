<?php
require_once 'SQLhelper.php';
use Assi\SQLhelper;

$id = $_GET['id'];
$action = new  SQLhelper();
$res = $action->query_dml("DELETE FROM schedule WHERE sch_id = '$id'");
