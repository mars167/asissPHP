
$('input:checkbox').change(function () {

    if(confirm("确认完成事项？")){
        $(this).parents("li").hide();

        //把这个事项的id值发给PHP 进行删除
        $.get("DeleteEvent.php",{
            id: $(this).attr("value")
        });

    }else{
        $(this).attr('checked',false);
    }

});


