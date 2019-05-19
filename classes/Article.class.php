<?php

require_once 'DB.class.php';

class Article {

public $id;
public $ArticleTitle;
public $ArticleTime;
public $ArticleUser;
public $ArticleText;
public $ArticleCategory;

function __construct($data)
{
    $this->id = (isset($data["id"])) ? $data["id"] : "";
    $this->ArticleTitle = (isset($data["ArticleTitle"])) ? $data["ArticleTitle"] : "";
    $this->ArticleTime = (isset($data["ArticleTime"])) ? $data["ArticleTime"] : "";
    $this->ArticleUser = (isset($data["ArticleUser"])) ? $data["ArticleUser"] : "";
    $this->ArticleText = (isset($data["ArticleText"])) ? $data["ArticleText"] : "";
    $this->ArticleCategory = (isset($data["ArticleCategory"])) ? $data["ArticleCategory"] : "";

}

public function save($isnewArticle = false){

    $db = new DB;

    if(!$isnewArticle){

        $data = array(
            "ArticleTitle" => "'$this->ArticleTitle'",
            "ArticleText" => "'$this->ArticleText'",
            "ArticleCategory" => "'$this->ArticleCategory'"
        );

        $db->update($data, "article", "id = ".$this->id);
    } else {

        $data = array(
            "ArticleTitle" => "'$this->ArticleTitle'",
            "ArticleText" => "'$this->ArticleText'",
            "ArticleCategory" => "'$this->ArticleCategory'",
            "ArticleTime" => "'".date("Y-m-d H:i:s",time())."'",
            "ArticleUser" => "'$this->ArticleUser'"
        );

        $this->id = $db->insert($data, "Article");
        $this->ArticleTime = time();


    }
    return true;

}

}
?>