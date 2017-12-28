<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2017/12/5
 * Time: 下午3:02
 */
namespace Assi;

require_once 'SQLhelper.php';

use Assi\SQLhelper;

class Schedule extends SQLhelper
{
    public $event_count;
    public $events;
    public $uid;


    public function __construct($uid)
    {
        parent::__construct();
        $this->uid = $uid;

    }

    public function read()
    {
        $res = $this->query_array("SELECT sch_id,sch_status,sch_title FROM schedule WHERE sch_uid = '$this->uid' ");
        $count = 0;
        foreach ($res as $key => $value) {
            $count++;
            echo "<li><input type=\"checkbox\" id=\"brand".$count."\" value=\"".$value['sch_id']."\"><label for=\"brand".$count."\"><span></span>".$value["sch_title"]."</label></li>";
        }

    }

    public function create()
    {
        $res = $this->query_dml("");
    }

    public function update()
    {

    }

    public function delet()
    {

    }
}

?>
<li>
    <input type="checkbox" id="brand" value="">
    <label for="brand"><span></span> 事件1</label>
</li>

