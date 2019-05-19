<?php

require_once 'DB.class.php';

class News {

public $id;
public $NewsTitle;
public $NewsTime;
public $NewsText;

function __construct($data)
{
    $this->id = (isset($data["id"])) ? $data["id"] : "";
    $this->NewsTitle = (isset($data["NewsTitle"])) ? $data["NewsTitle"] : "";
    $this->NewsTime = (isset($data["NewsTime"])) ? $data["NewsTime"] : "";
    $this->NewsText = (isset($data["NewsText"])) ? $data["NewsText"] : "";

}

public function save($isnewNews = false){

    $db = new DB;

    if(!$isnewNews){

        $data = array(
            "NewsTitle" => "'$this->NewsTitle'",
            "NewsText" => "'$this->NewsText'"
        );

        $db->update($data, "news", "id = ".$this->id);
    } else {

        $data = array(
            "NewsTitle" => "'$this->NewsTitle'",
            "NewsText" => "'$this->NewsText'",
            "NewsTime" => "'".date("Y-m-d H:i:s",time())."'"
        );

        $this->id = $db->insert($data, "news");
        $this->NewsTime = time();


    }
    return true;

}

}
?>