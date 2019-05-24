<?php
include_once './DB/database.php';

if(isset($_POST['signup_btn'])){
    function addNewUser(){
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     newUser([
        'username'=>$username,
        'email' => $email,
         'password' => $password,
     ]);
    }
    $addNewUser = addNewUser();
}

