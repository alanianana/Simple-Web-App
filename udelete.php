<?php
include_once './DB/database.php';
if(isset($_GET['id'])) {
    $userid = $_GET['id'];
    deleteUser($userid);
    header('Location: ./views/ad.php');
}
