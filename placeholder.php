<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
    </tr>
    </thead>
    <tbody>
           <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['phone']?></td>
                <td><?php echo $user['website']?></td>
            </tr>
            <?php endforeach;; ?>
    </tbody>
    </table>