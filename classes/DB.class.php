<?php

class DB {

    protected $db_name = "iceberg";
    protected $db_host = "localhost";
    protected $db_user = "root";
    protected $db_password = "4520";

    public function connect(){

        $connection = mysql_connect($this->db_host, $this->db_user, $this->db_password);
        mysql_select_db($this->db_name);
        return true;

    }

    public function processRowSet($rowSet, $singleRow = false) {

        $resultArray = array();
        while($row = mysql_fetch_assoc($rowSet)){
            array_push($resultArray, $row);
        }
        if($singleRow === true)
        return $resultArray[0];
        return $resultArray;

    }

    public function select($table, $where=NULL){


        if (!$where == NULL){
            $sql = "SELECT * FROM $table WHERE $where";
        } else {
            $sql = "SELECT * FROM $table";
        }
        $result = mysql_query($sql);
        if(mysql_num_rows($result) == 1)
        return $this->processRowSet($result, true);
        return $this->processRowSet($result);

    }

    public function update($data, $table, $where){

        foreach($data as $column => $value){

            $sql = "UPDATE $table SET $column = $value WHERE $where";
            mysql_query($sql) or die(mysql_error());

        }

        return true;

    }

    public function insert($data, $table){

        $columns = "";
        $values = "";

        foreach($data as $column => $value){

            $columns .= ($columns == "") ? "" : ", ";
            $columns .= $column;
            $values .= ($values == "") ? "" : ", ";
            $values .= $value;

        }

        $sql = "INSERT INTO $table ($columns) values ($values)";
        mysql_query($sql) or die(mysql_error());

        return mysql_insert_id();

    }

}
?>