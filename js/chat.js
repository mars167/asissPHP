
    $("#post").click(function(){

        var content=$("#content").val();
        if(!$.trim(content)){
            alert('请填写内容');
            return false;
        }
        $("#content").val("");

        $.post("ajax.php", {content:content});});


function getData(msg){
    if(msg == undefined)
    {
        msg = '';
    }
    $.post("get.php",{"msg":msg},function(data){
        //var myjson = eval("("+data+")");
        if(data){
            var chatcontent = '';
            var obj = eval('('+data+')');
            $.each(obj,function(key,val){
                chatcontent +="<div class=\"activity-row activity-row1 activity-right\">";
                chatcontent +="<div class=\"col-xs-2 \" style=\"margin-top: 5px; margin-right: 30px;  box-sizing: border-box;\">";
                chatcontent +="<h4>"+val['username']+"</h4>";
                chatcontent +="</div>" +"<div class=\"col-xs-10 activity-img1\">" +" <div class=\"activity-desc-sub\">";
                chatcontent +="<p>"+val['content']+"</p>";
                chatcontent +="</div> </div> <div class=\"clearfix\"> </div></div>";

            });
            $("#chatshow").html(chatcontent);
        }
        getData();
    })
}


getData("one");

