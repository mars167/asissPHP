<?php
require_once 'Question.class.php';
use Assi\Question;
session_start();
//print_r($_POST);
$action = new Question($_SESSION['uid']);
$action->addQuestion($_SESSION['uid'],$_POST['title'],$_POST['content'],0);

header("Location:MyQuestion.php");
exit();
