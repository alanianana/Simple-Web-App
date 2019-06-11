<?php
function connection(){
    $conn = mysqli_connect('localhost','root','','mybase');
    return $conn;
}
function newUser($user){
    $conn = connection();
    $sql = sprintf("INSERT INTO users(name,surname,email,password)
             value ('%s','%s','%s','%s')",$user['name'], $user['surname'],$user['email'],$user['password']);
    $result = mysqli_query($conn,$sql);
    if($result===TRUE){
        header("location: ../simple_web_app/views/login.php");
    }else{
        echo "თქვენ ვერ დარეგისტრირდით";
    }
}

function loginUser($email,$password){
    $conn = connection();
    $sql = "SELECT * FROM users where email='$email'and password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result))
        {
            $admin = $row['admin'];
            $id = $row['id'];
            $email = $row['email'];
            session_start();
            $_SESSION['id']=$id;
            $_SESSION['email']=$email;
            if($admin==1) {
            $_SESSION['admin'] = $admin;
        }

    }
            header("location: ../simple_web_app/views/profile.php");
        }
    else {

        echo '<script>alert("არასწორი პაროლი ან ელ.ფოსტა")</script>';
    }


}

function allArticle (){
    $conn = connection();
    $sql = "SELECT * FROM articles  ";
    $articles = [];
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if ($count>0){
        while($row = mysqli_fetch_assoc($result)){

            $articles[] = $row;
        }
    }
    return $articles;
}

function articleId($userid){
    $conn = connection();
    $articles = [];
    $sql = "SELECT * FROM users  WHERE id = $userid";
    $result=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        while($row = mysqli_fetch_assoc($result)){

            $articles[] = $row;
        }
    }
    $nam_sur = $articles[0]['name'] . ' '. $articles[0]['surname'] ;
    return $nam_sur;
}
 function allUsers(){
     $conn = connection();
     $users = [];
     $sql = "SELECT * FROM users ";
     $result=mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);
     if ($count>0){
         while($row = mysqli_fetch_assoc($result)){

             $users[] = $row;
         }
     }
     return $users;
 }
 function deleteUser($id){
     $conn = connection();
     $sql = "DELETE FROM users where id=$id";
      mysqli_query($conn,$sql);

 }

 function userArt($id){
         $conn = connection();
         $sql = "SELECT * FROM articles where id=$id";
         $userArt = [];
         $result = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($result);
         if ($count>0){
             while($row = mysqli_fetch_assoc($result)){

                 $userArt[] = $row;
             }
         }
         return $userArt;
     }

