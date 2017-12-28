<?php
require_once 'header_log.php';
require_once 'SQLhelper.php';
use  Assi\SQLhelper;
$error = '';
$name = '';
$collage = '';
$university = '';
$major = '';
$class = '';
$id = '';
$password = '';
session_start();
if (isset($_POST['name'])){
    $name = $_POST['name'];
    $collage = $_POST['collage'];
    $university = $_POST['university'];
    $major = $_POST['major'];
    $class = $_POST['class'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    $helper = new SQLhelper();
    $res = $helper->query("SELECT log_id FROM user_info WHERE log_id='$id'");
    if (!$res->num_rows){
        $insert1 = $helper->query_dml("INSERT INTO user_log VALUE ('$id','$password')");
        $insert2 = $helper->query_dml("INSERT INTO user_info VALUE ('$id','$name','$university','$collage','$major','$class')");
        if (!$insert1 || !$insert2){
            $error = "注册失败！请重新填写";
        }
        $_SESSION['uid'] =$id;
        $_SESSION['username'] = $name;
        header('Location:Schedule.php');
    }else{
        $error="此学号已注册";
    }

}



?>

<div id="page-wrapper" style="margin-left: 0px;">
    <div class="main-page signup-page">
        <h3 class="title1">在这里注册</h3>
        <div class="sign-up-row widget-shadow">
            <form method="post" action="Regester.php">
                <h5>个人信息:</h5>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>用户名* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="text" name="name" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>所在高校* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="text" name="university" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>学院* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input  type="text" name="collage" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>专业* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="text" name="major" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>班级* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="text" name="class" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <h6>登录信息 :</h6>
                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>学号* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="text" name="id" required>

                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="sign-u">
                    <div class="sign-up1">
                        <h4>密码* :</h4>
                    </div>
                    <div class="sign-up2">

                            <input type="password" name="password" required>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <span style="color:red;"><?=$error?></span>
                <div class="sub_home">
                    <input type="submit" value="注册">
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
