<div class="wrapper">
<div class="name">
<?php if ($user['id']): ?>
    <h3>Update User: <?php echo $user['name'] ?> </h3>
<?php else: ?>
    <h3>Create new User</h3>
<?php endif ?>
</div>
<form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>"
                           class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>"
                           class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['phone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input name="website" value="<?php echo $user['website'] ?>"
                           class="form-control  <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
                
                <button class="btn btn-success">Submit</button>
            </form>
            
</div>