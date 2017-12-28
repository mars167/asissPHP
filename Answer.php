<?php
require_once 'header.php';
require_once 'nav.php';
require_once 'Question.class.php';

use Assi\Question;

$uid = $_SESSION['uid'];
$username = $_SESSION['username'];

$id = $_GET['id'];
$action = new Question($uid);
$action->showQuestion($id);

?>


<div id="page-wrapper">
    <div class="main-page">
        <div class="media">
            <div class="bs-example5 widget-shadow" data-example-id="default-media">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">问题：<?=$action->title?></h4> <hr>
                        <h5 class="media-heading">描述：</h5><?=$action->content ?>
                        <div style="text-align: right;">
                            <b><?=$action->name?>&nbsp;提问</b>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>我来回答 :</h4>
                </div>
                <div class="form-body">
                    <form action="AddAnswer.php" method="post">
                        <div class="form-group">

                            <textarea name="answer" class="form-control " required> </textarea>
                            <input type="hidden" name="qid" value="<?=$action->id?>">
                            <input type="hidden" name="uid" value="<?=$action->uid?>">

                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="bs-example5 widget-shadow" data-example-id="default-media">
                <?php $action->showAnswer($id); ?>
            </div>
        </div>

    </div>
</div>

<?php require_once 'footer.php'; ?>
