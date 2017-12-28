<?php
require_once 'Schedule.class.php';
require_once 'header.php';
require_once 'nav.php';


use Assi\Schedule;

?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="elements  row">
            <!--待办事件插件-->
            <div class="col-md-12 col-lg-12 col-sm-12  widget-shadow" style="padding-left: 0px !important; padding-right:0px !important ;">
                <div class="col-md-12 col-lg-12 col-sm-12  activity_box activity_box2" style="padding-left: 0px !important; padding-right:0px !important ;">
                    <h4 class="title3">Todo</h4>
                    <div class="scrollbar scrollbar1 ">
                        <!--事件列表-->
                        <div class="single-bottom">
                            <ul>
                               <?php
                                    $event = new Schedule($uid);
                                    $event->read();
                               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-bottom">
                        <form method="get" action="CreatEvent.php" >
                            <input id="creat" type="text" name="title" placeholder="添加待办事项" required="">
                        </form>
                    </div>
                </div>
            </div>
            <!--end-->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script src="js/schedule.js"></script>
<?php require_once 'footer.php';?>