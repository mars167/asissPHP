<?php
require_once 'header.php';
require_once 'nav.php';
require_once 'Profile.class.php';

use Assi\Profile;

$user = new Profile();



?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="elements  row">
            <!--待办事件插件-->
            <div class="col-md-4 profile widget-shadow ">
                <h4 class="title3">个人中心</h4>
                <div class="profile-top">
                    <img src="images/img1.png" alt="">
                    <h4><?=$user->name?></h4>

                </div>
                <div class="profile-text">

                    <div class="profile-row row-middle">
                        <div class="profile-left">
                            <i class="fa fa-mobile profile-icon"></i>
                        </div>
                        <div class="profile-right">
                            <h4><?=$user->nuiversity?></h4>
                            <p>大学</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="profile-row">
                        <div class="profile-left">
                            <i class="fa fa-facebook profile-icon"></i>
                        </div>
                        <div class="profile-right">
                            <h4><?=$user->collage?></h4>
                            <p>学院</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="profile-row row-middle">
                        <div class="profile-left">
                            <i class="fa fa-mobile profile-icon"></i>
                        </div>
                        <div class="profile-right">
                            <h4><?=$user->major?></h4>
                            <p>专业</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="profile-row row-middle">
                        <div class="profile-left">
                            <i class="fa fa-mobile profile-icon"></i>
                        </div>
                        <div class="profile-right">
                            <h4><?=$user->class?></h4>
                            <p>班级</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

            </div>
            <!--end-->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php';?>