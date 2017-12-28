<?php
require_once 'header.php';
require_once 'nav.php';
require_once 'Question.class.php';

use Assi\Question;

$uid = $_SESSION['uid'];
$action = new Question($uid);


?>

    <div id="page-wrapper">
        <div class="main-page">


            <div class="forms">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>提问 :</h4>
                    </div>
                    <div class="form-body">
                        <form action="AddQuestion.php" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="title">标题:</label>
                                    <input type="text" name="title" class="form-control" id="title" required placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="content">描述:</label>
                                    <textarea name="content" class="form-control " id="content" required> </textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php require_once 'footer.php'; ?>