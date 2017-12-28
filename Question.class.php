<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2017/12/6
 * Time: 下午8:35
 */
namespace Assi;
require_once 'SQLhelper.php';
use Assi\SQLhelper;
class Question extends SQLhelper
{
    public $uid;
    public $id;
    public $title;
    public $content;
    public $status;
    public $questions;
    public $quid;
    public $name;


    public function __construct($uid)
    {
        parent::__construct();
        $this->uid = $uid;
    }

    public function read()
    {
        $res = $this->query_array("SELECT * FROM question WHERE que_uid = '$this->uid' ");
        $count = 0;
        foreach ($res as $key => $value) {
            $count++;
            echo "<div class=\"bs-example5 widget-shadow\" data-example-id=\"default-media\">";
            echo "<div class=\"media\"> <div class=\"media-body\"> <h4 class=\"media-heading\"><a href=\"Answer.php?id=" . $value['que_id'] . "\">" . $value['que_title'] . "</a></h4>  " . $value['que_content'] . "</div><div class=\"clearfix\"> </div> </div>";
            echo "</div>";
        }
    }

    public function readAll()
    {
        $res = $this->query_array("SELECT * FROM question  ");
        $count = 0;
        foreach ($res as $key => $value) {
            $count++;
            echo "<div class=\"bs-example5 widget-shadow\" data-example-id=\"default-media\">";
            echo "<div class=\"media\"> <div class=\"media-body\"> <h4 class=\"media-heading\"><a href=\"Answer.php?id=" . $value['que_id'] . "\">" . $value['que_title'] . "</a></h4>  " . $value['que_content'] . "</div><div class=\"clearfix\"> </div> </div>";
            echo "</div>";
        }
    }

    public function showQuestion($question_id)
    {
        $res = $this->query_array("SELECT * FROM question WHERE que_id = '$question_id'");
        $this->quid = $res[0]['que_uid'];
        $this->id = $question_id;
        $this->title = $res[0]['que_title'];
        $this->content = $res[0]['que_content'];
        $this->status = $res[0]['que_status'];
        $res = $this->query_array("SELECT info_name FROM user_info WHERE info_uid ='$this->quid' ");
        $this->name = $res[0]['info_name'];
    }

    public function showAnswer($questiong_id){
        $res = $this->query_array("SELECT * FROM answer WHERE ans_qid = '$questiong_id'");
        foreach ($res as $key=>$val){
            $uid = $val['ans_uid'];
            $content = $val['ans_content'];

            $info = $this->query_array("SELECT info_name FROM user_info WHERE info_uid = '$uid' ");

            $name = $info[0]['info_name'];
            echo <<<END
            <div class="media">
                <div class="media-body">

                    <h4 class="media-heading">$name 回答：</h4>
                    $content
                    
                </div>
                <hr>
                <div class="clearfix"> </div>
            </div>
END;

        }
    }
    public function addAnswer($question_id,$user_id,$content){

        $res = $this->query_dml("INSERT INTO answer(ans_uid,ans_qid,ans_content) VALUES ('$user_id','$question_id','$content')");
        if(!$res){
            print "ERROE!!!";
        }else{
            print "SUCESS!!";
        }

    }

    public function addQuestion($user_id,$que_title,$que_content,$status){
        $res = $this->query_dml("INSERT INTO question(que_uid,que_title,que_content,que_status) VALUE ('$user_id','$que_title','$que_content','$status')");
        if(!$res){
            print "ERROE!!!";
        }else{
            print "SUCESS!!";
        }
    }

}
?>
