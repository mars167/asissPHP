
<!--left-fixed -navigation-->
<div class=" sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="Schedule.php"><i class="fa fa-home nav_icon"></i>日程安排</a>
                </li>
                <li>
                    <a href="Chat.php"><i class="fa fa-cogs nav_icon"></i>在线交流<span class="nav-badge">12</span> </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-check-square-o nav_icon"></i>答疑解惑&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa  fa-angle-down"></span></a>
                    <ul class="nav nav-second-level ">
                        <li>
                            <a href="MyQuestion.php">我的问题</a>
                        </li>
                        <li>
                            <a href="Question.php">所有的问题</a>
                        </li>
                        <li>
                            <a href="CreatQuestion.php">提问</a>
                        </li>
                    </ul>

                </li>

            </ul>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>
<!--left-fixed -navigation-->

<!-- header-starts -->
<div class="sticky-header header-section ">
    <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
            <a href="#">
                <h1>学习助理</h1>
                <span>专注服务大学生</span>
            </a>
        </div>
        <!--//logo-->
        <!--<div class="clearfix"> </div>-->
    </div>
    <div class="header-right ">
        <div class="profile_details_left">
            <!--notifications of menu start -->
            <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <div class="user-name" style="margin-top: 13px;">
                                <p><?=$user?></p>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu" style="right: 200px; ">
                        <li>
                            <a href="Profile.php"><i class="fa fa-cog"></i> 个人中心</a>
                        </li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-sign-out"></i> 退出登录</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //header-ends -->