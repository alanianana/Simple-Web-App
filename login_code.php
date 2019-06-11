<?php
include_once './DB/database.php';
session_start();
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = md5( $_POST['password']);
    loginUser($email,$password);


}
