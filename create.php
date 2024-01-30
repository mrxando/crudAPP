<?php 
require 'users.php';
include 'partials/header.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => '',
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);


    if ($isValid) {
    $user = createUser($_POST);

    header("Location: index.php");
    }
}
?>


<?php include '_form.php'; ?>
<?php include 'partials/footer.php'; ?>