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


?>


<div class="name">
    <h3>View User: <?php echo $user['name'] ?> </h3>
</div>
<div class="table_body">
<table>
    <tbody>
        <tr>
            <th>Name:</th>
            <td><?php echo $user['name'] ?></td>
        </tr>
        <tr>
            <th>Username:</th>
            <td><?php echo $user['username'] ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $user['email'] ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?php echo $user['phone'] ?></td>
        </tr>
        <tr>
            <th>Website:</th>
            <td><a target="_blank" href="http://<?php echo $user['website']?>">
                    <?php echo $user['website']?></td>
        </tr>

    </tbody>
</table>
</div>
<?php include 'partials/footer.php'; ?>