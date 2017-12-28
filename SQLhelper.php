<?php

namespace Assi;


class SQLhelper
{
    public $conn;
    public $dbname="Assit";
    public $username="mars";
    public $password="572286594abc";
    public $host="localhost";

    //构造函数
    public function __construct(){

        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
        mysqli_query($this->conn,'set names utf8');
        if(!$this->conn)
        {

            die("连接失败！".mysqli_error($this->conn));
        }

    }


    //执行dql语句
    public function query($sql){
        $res=mysqli_query($this->conn,$sql) ;
        return $res;
    }

    //执行dql语句，返回的是关联数组
    public function query_array($sql){
        $arr=array();
        $res=mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        //吧res的数据集导入到数组里面去
        while($row = mysqli_fetch_assoc($res)){
            $arr[]=$row;
        }
        mysqli_free_result($res);
        return $arr;
    }

    //分页公共查询语句
    //$sql1=""select * from ... where ... limit 0,6";
    //$sql2="select count(id) from 表";
    public function query_fenye($sql1,$sql2,$fenyePage){
        //这里查询到了要显示的分页数据
        $res=mysqli_query($this->conn,$sql1) or die(mysqli_error($this->conn));
        //$ress=>array();
        $arr=array();
        while ($row=mysqli_fetch_assoc($res)){
            $arr[]=$row;
        }

        //把$arr付给$fenyePage
        $fenyePage->res_array=$arr;
        mysqli_free_result($res);
        $res2=mysqli_query($this->conn,$sql2) or die(mysqli_error($this->conn));

        if($row=mysqli_fetch_row($res2)){
            $fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize); //向上取整数 求出页数
            $fenyePage->rowCount=$row[0];//
        }

        //navigate分页信息开始：
        $page_to=10;
        if($fenyePage->pageNow  >  $fenyePage->pageCount - 10 && $fenyePage->pageNow  <=  $fenyePage->pageCount)
            $page_to=$fenyePage->pageCount - $fenyePage->pageNow;
        else if($fenyePage->pageNow  >  $fenyePage->pageCount)
            $fenyePage->pageNow=$fenyePage->pageCount;
        if($fenyePage->pageNow > 1){
            $prepage = $fenyePage->pageNow - 1;
            $fenyePage->navigate="<a href='?pageNow=$prepage'>上一页</a>&nbsp";
        }
        if($fenyePage->pageNow>10){
            //向上翻十页

            $_big_a=(floor(($fenyePage->pageNow-1)/10)-1)*10+1;
            $fenyePage->navigate.="<a href='?pageNow=$_big_a'><<</a>";
        }

        $start=floor(($fenyePage->pageNow-1)/10)*10+1;
        $index = $start;
        for(;$start<$index+$page_to;$start++){
            $fenyePage->navigate.="<a href='?pageNow=$start'>[$start]</a>";
        }
        if($fenyePage->pageNow < $fenyePage->pageCount){
            //向下翻十页
            $_big_b=(floor(($fenyePage->pageNow-1)/10)+1)*10+1;
            $fenyePage->navigate.="<a href='?pageNow=$_big_b'>>></a>";
        }

        if($fenyePage->pageNow < $fenyePage->pageCount){
            $prepage = $fenyePage->pageNow + 1;
            $fenyePage->navigate.="<a href='?pageNow=".$prepage."'>下一页</a>";
        }
        //navigate分页信息开结束



    }

    //执行dml语句
    //输入查询语句 返回0：查询失败 1：执行成功 2：没有行受到影响
    public function query_dml($sql){

        $dml_sql = mysqli_query($this->conn,$sql);
        if(!$dml_sql){
            return 0;
        }else{
            if(mysqli_affected_rows($this->conn)>0){
                return 1;//表示执行成功！
            }else{
                return 2;//表示没有行受到影响
            }
        }

    }



    public function close_connect(){
        if(!empty($this->conn)){
            mysqli_close($this->conn);
        }
    }


}