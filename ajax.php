<?php
/*session_start();
$mem = new Memcache;
$mem->connect("localhost",11211);
if(isset($_POST['content'])){
    $con['username'] = $_SESSION["username"];
    $con['content'] = $_POST["content"];

    $data = $mem->get('chat');
    $data[] = $con;
    $mem->set("chat",$data,0,0);
}
$mem->close();
*/
if(isset($_POST['content'])){
    session_start();
    $filename = date("Ymd",time()).".txt";
    if(file_exists($filename)){
        $content = file_get_contents($filename);
        $data = json_decode($content,true);
        $con['username'] = $_SESSION["username"];
        $con['content'] = $_POST["content"];
        $data[] = $con;
        $file = fopen($filename,"w");
        fwrite($file,json_encode($data));
        fclose($file);
    }else{
        $file = fopen($filename,"w");
        $con['username'] = $_SESSION["username"];
        $con['content'] = $_POST["content"];
        $data[] = $con;
        fwrite($file,json_encode($data));
        fclose($file);
    }

}



?>