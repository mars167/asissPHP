<?php
require_once 'LoginForm.php';
require_once 'SQLhelper.php';
use Assi\SQLhelper as helper;
use Assi\LoginForm as login;

$uid = "201600000";
$pass = "123456";
$error =  "";
$conn = new helper();
$user = new login();

$salt1 = "as@-)12";
$salt2 = "ni#4!";
session_start();
if (isset($_POST['uid'])){
    $user->uid = $user->safe($_POST['uid']);
    $user->pass =$user->safe($_POST['password']);
    if ($user->uid == "" || $user->pass == "" ){
        $error = "未填完整";
    }else{
        $result = $conn->query("SELECT log_id,log_password FROM user_log WHERE log_id = '$user->uid' AND log_password = '$user->pass'");
        if (isset($result)){
            $res_name = $conn->query_array("SELECT info_name FROM user_info  WHERE info_uid = '$user->uid'  ");
            $name = $res_name[0]['info_name'];
            $_SESSION['username'] = $name;
            $_SESSION['uid'] = $user->uid;

            header("Location:Schedule.php");

            exit();
        }else{
            $error = "<p style='color:red;'>用户名或密码错误</p>";
        }
    }
}
require_once 'header_log.php';
?>
<div id="page-wrapper" style="margin-left: 0px;">
    <div class="main-page login-page ">
        <h3 class="title1">登录页面</h3>
        <div class="widget-shadow">
            <div class="login-top">
                <h4>欢迎来到学习助手! <br> 没有账号? <a href="Regester.php">  点击注册 »</a> </h4>
            </div>
            <div class="login-body">
                <form id="login" class=" " method="post" action="Login.php">
                    <input type="text" class="user" name="uid"  placeholder="输入学号" required="">
                    <input type="password" name="password" class="lock" placeholder="输入密码">
                    <p><?=$error?></p>
                    <input type="submit" name="Sign In" value="登  录">
                    <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>记住密码</label>
                        <div class="clearfix"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php';?>