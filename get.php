<?php
//require_once 'SQLhelper.php';
//use Assi\SQLhelper;
//
//$action = new SQLhelper();
//
//function getData(){
//    $sql="SELECT count(*) FROM  talkroom";
//    $action = new SQLhelper();
//    return $action->query_array($sql);
//
//}
//$old = getData();
//
//while(true){
//    $new = getData();
//    if($new[0]>$old[0]){
//        //echo json_encode($new['data']);
//        //print_r($new);
//        echo '2222222222'.'<br/>';
//    }
//    //echo '<br />11111111111111111111111111111111111111111111111111111111111111111111';
//    usleep(1000);
//}

/*set_time_limit(0);
$mem = new Memcache;
$mem->connect("localhost",11211);

$count = count($mem->get("chat"));
$com = true;
//$mem->delete('chat');
if($_POST['msg'] == "one"){
    exit(json_encode($mem->get("chat")));
}
if($_POST['msg'] == "break"){
    $com = false;
}
$time1 = time();
while(true){
    if($com){
        $data = $mem->get("chat");
        if(count($data)>$count){
            echo json_encode($data);
            break;
        }
        usleep(300);
    }else{
        break;
    }
}
$mem->close();*/


set_time_limit(0);
$filename = date("Ymd",time()).".txt";
if(file_exists($filename)){
    $content = file_get_contents($filename);
    $data = json_decode($content,true);
    $count = count($data);
    // echo $count;die;
    if($_POST['msg'] == "one"){
        exit(json_encode($data));
    }

    while(true){

        $contents = file_get_contents($filename);
        $datas = json_decode($contents,true);
        $counts = count($datas);
        if($counts>$count){
            echo json_encode($datas);
            break;
        }
        usleep(300);
    }
}else{
    $file = fopen($filename,"w");
    $con['username'] = "系统消息";
    $con['content'] = "欢迎来到Assit聊天室";
    $data[] = $con;
    fwrite($file,json_encode($data));
    fclose($file);

    exit(json_encode($data));

}

?>