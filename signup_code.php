<?php
include_once './DB/database.php';

if(isset($_POST['signup_btn'])){
    function addNewUser(){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
     $email = $_POST['email'];
     $password =md5( $_POST['password']);

     newUser([
         'name'=> $name,
        'surname'=>$surname,
        'email' => $email,
         'password' => $password,
     ]);
    }
    $addNewUser = addNewUser();
}

