<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/header'); ?>

<div class="conatiner">

    <form action="<?php echo base_url().'admin/user/edit/'.$user['u_id']; ?>" method="POST" class="form-container mx-auto shadow-container"
        style="width:80%">
        <h3 class="mb-3 p-2 bg-info">Edit User "<?php echo $user['username']; ?>"</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Enter Username</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username"
                    value="<?php echo set_value('username', $user['username'])?>">
                    <?php echo form_error('username'); ?>
                </div>
                
                <div class="form-group">
                    <label for="lastname">Enter Last-Name</label>
                    <input type="text" class="form-control 
                    <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>"
                    name="lastname"
                    value="<?php echo set_value('lastname', $user['l_name'])?>">
                    <?php echo form_error('lastname'); ?>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control
                    <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password"
                    placeholder="Password"
                    value="<?php echo set_value('password', $user['password'])?>">
                    <?php echo form_error('password'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Enter First-Name</label>
                    <input type="text" class="form-control
                    <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname"
                    value="<?php echo set_value('firstname', $user['f_name'])?>">
                    <?php echo form_error('firstname'); ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="email"
                    value="<?php echo set_value('email', $user['email'])?>">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Phone"
                    value="<?php echo set_value('phone', $user['phone'])?>">
                    <?php echo form_error('phone'); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" type="text" style="height:70px;" class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
                <?php echo form_error('address'); ?>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="<?php echo base_url().'admin/user/index'; ?>" class="btn btn-secondary">Back</a>
    </form>
</div>



<?php $this->load->view('admin/footer'); ?>

</html>