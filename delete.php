<?php 
require 'users.php';
include 'partials/header.php';
if (!isset($_GET['id'])){
    echo "Not found";
    exit();
}

$userId = $_GET['id'];
deleteUser($userId);

header("Location: index.php");
//$user = getUserById($userId);

//if(!$user){
 //   echo "Not found";
//    exit();
//}