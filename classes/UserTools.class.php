<?php

require_once 'User.class.php';
require_once 'DB.class.php';

class UserTools {

    public function login($username, $password) {

        $hashedpassword = md5($password);
        $result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$hashedpassword'");
        if(mysql_num_rows($result) == 1){

            $_SESSION["user"] = serialize(new User(mysql_fetch_assoc($result)));
            $_SESSION["login_time"]=time();
            $_SESSION["logged_in"]= 1;
            return true;
        } else {
            return false;
        }
    }

    public function logout(){
        unset($_SESSION["user"]);
        unset($_SESSION["login_time"]);
        unset($_SESSION["logged_in"]);
        session_destroy();
    }

    public function checkUsernameExists($username) {
        $result = mysql_query("select id from users where username='$username'");
        if(mysql_num_rows($result) == 0)
        {
        return false;
        }else{
        return true;
        }
        
    }

    public function get($id)
    {
        $db = new DB();
        $result = $db->select('users', "id = $id");
        return new User($result);
    }

}
?>