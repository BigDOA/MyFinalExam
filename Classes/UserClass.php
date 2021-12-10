<?php

require(dirname(__FILE__)."/../Settings/connection.php");

class User extends Connection{
    function addusers($name, $username, $password, $type){
        return $this->query("INSERT INTO users(name, username, password, type) 
                                                    values ('$name', '$username', '$password', '$type')");
    }

    function editusers($id, $name, $username, $password, $type ){
        return $this->query("UPDATE users
                            SET name = '$name', username = '$username', password= '$password', type = '$type'
                            WHERE id = '$id' ");
    }

    function select_users(){
        return $this->fetch("SELECT * FROM users where type = 1");
    }
    function deleteusers($id){
        return $this->query("DELETE FROM users WHERE id = '$id'");
    }

    function findusers($username){
        return $this->fetchOne("SELECT id, name, username, password  from users WHERE username = '$username'");
    }


    function findID($username){
        return $this->fetchOne("SELECT id FROM users WHERE username = '$username'");
    }

    function find_role($username){
        return $this->fetchOne("SELECT type from users WHERE username = '$username' ");
    }

    function get_users($id){
        return $this->fetchOne("SELECT * FROM users WHERE id = '$id'");
    }
}


?>