<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/header'); ?>

<div class="conatiner ">

    <form class="form-container mx-auto shadow-container" style="width:50%">
        <h3 class="mb-3">Add User Info</h3>
        <div class="form-group">
            <label for="username">Enter Username</label>
            <input type="text" class="form-control my-2" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="firstname">Enter First-Name</label>
            <input type="text" class="form-control my-2" id="firstname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="lastname">Enter Last-Name</label>
            <input type="text" class="form-control my-2" id="lastname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="email" class="form-control my-2" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control my-2" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="text">Phone</label>
            <input type="phone" class="form-control my-2" id="phone" placeholder="Enter Phone No">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>



<?php $this->load->view('admin/footer'); ?>

</html>