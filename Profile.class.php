<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2017/12/6
 * Time: 上午11:47
 */
namespace Assi;
require_once 'SQLhelper.php';
use Assi\SQLhelper;
use yii\db\Query;


class Profile extends SQLhelper
{
    public $id;
    public $name;
    public $nuiversity;
    public $collage;
    public $major;
    public $class;


    public function __construct(){
        parent::__construct();
        $this->id = $_SESSION['uid'];
        $result = $this->query_array("SELECT * FROM user_info WHERE info_uid = '$this->id'");
        $this->name = $result[0]['info_name'];
        $this->nuiversity = $result[0]['info_university'];
        $this->collage = $result[0]['info_collage'];
        $this->major = $result[0]['info_major'];
        $this->class = $result[0]['info_class'];

    }

}