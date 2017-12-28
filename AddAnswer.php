<?php
require_once 'Question.class.php';
use Assi\Question;
session_start();
$action = new Question($_SESSION['uid']);
$action->addAnswer($_POST['qid'],$_POST['uid'],$_POST['answer']);
$qid = $_POST['qid'];

header("Location:Answer.php?id=$qid");
exit();
