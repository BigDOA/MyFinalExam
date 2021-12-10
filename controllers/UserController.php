<?php

require("../Classes/UserClass.php");

function add_User_controller($name, $username, $password, $type){
    $User_instance = new User();
    return $User_instance->addusers($name, $username, $password, $type);
}

function delete_User_controller($id){
    $User_instance = new User();
    return $User_instance->deleteusers($id);
}

function update_User_controller($id,$name, $username, $password, $type){
    $User_instance = new User();
    return $User_instance->editusers($id, $name, $username, $password, $type);
}

function select_all_Users_controller(){
    $User_instance = new User();
    return $User_instance->select_users();
}

function find_User($username){
    $User_instance = new User();
    return $User_instance->findusers($username);
}


function find_User_id($username) {
    $User_instance = new User();
    return $User_instance->findID($username);
}

function find_User_role($username){
    $User_instance = new User();
    return $User_instance->find_role($username);
}

function get_User_controller($id){
    $User_instance = new User();
    return $User_instance->get_users($id);
}
















?>