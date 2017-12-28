<?php
require_once 'header.php';
require_once 'nav.php';
require_once 'Question.class.php';

use Assi\Question;

$uid = $_SESSION['uid'];
$action = new Question($uid);

?>

    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="elements  row">

                <div class="media">
                    <h3 class="title1">MyQusetions</h3>
                    <?php $action->read(); ?>
                </div>

            </div>
        </div>
    </div>

<?php require_once 'footer.php' ?>