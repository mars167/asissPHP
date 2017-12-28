<?php

require_once 'header.php';
require_once 'nav.php';

?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="elements  row">
            <!--聊天插件-->
            <div class="col-md-10 col-lg-10 col-sm-10  widget-shadow" style="padding-left: 0px !important; padding-right:0px !important ;">
                <div class="col-md-12 col-lg-12 col-sm-12  activity_box activity_box2" style="padding-left: 0px !important; padding-right:0px !important ;">
                    <h4 class="title3">Chat</h4>
                    <div id="chatshow" class="scrollbar scrollbar1">


                    </div>
                    <div class="chat-bottom form-body">

                       <input type="text" id="content" class="form-control" placeholder="Reply"  required>

                       <div class="forms button" >

                            <button type="button" id="post" class="btn btn-default" >提交</button>

                        </div>

                    </div>
                </div>
                <!--end-->
                <!--<div class="clearfix"> </div>-->
            </div>
        </div>
    </div>
</div>
<script src="js/chat.js"></script>
<?require_once 'footer.php';?>
