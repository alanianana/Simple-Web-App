<?php
function connection(){
    $conn = mysqli_connect('localhost','root','','mybase');
    return $conn;
}
function newUser($user){
    $conn = connection();
    $sql = sprintf("INSERT INTO users(username,email,password)
             value ('%s','%s','%s')", $user['username'],$user['email'],$user['password']);
    $result = mysqli_query($conn,$sql);
    if($result===TRUE){
        header("location: ../simple_web_app/views/login.php");

    }else{
        echo "თქვენ ვერ დარეგისტრირდით";
    }
}