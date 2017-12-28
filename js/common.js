 window.onbeforeunload = function () {
     if (event.clientX > document.body.clientWidth && event.clientY < 0 || event.altKey) {
         alert("退出登录！！");
         window.location.href = "Logout.php";
     }
 }
