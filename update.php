<?php 
require 'users.php';
include 'partials/header.php';
if (!isset($_GET['id'])){
    echo "Not found";
    exit();
}

$userId = $_GET['id'];

$user = getUserById($userId);

if(!$user){
    echo "Not found";
    exit();
}


$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
    updateUser($_POST, $userId);
    header("Location: index.php");
    }
}



?>

<?php include '_form.php'; ?>

<?php include 'partials/footer.php'; ?>