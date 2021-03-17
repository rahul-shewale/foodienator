<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singin Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/front/css/profile.css">
</head>

<body>
    <?php
        if (!empty($this->session->flashdata('success'))) {
          echo "<div class='alert alert-success m-3 mx-auto' style='width:50%'>".$this->session->flashdata('success')."</div>";
        }
    ?>
    <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger m-3 mx-auto' style='width:50%'>".$this->session->flashdata('msg')."</div>";
        }
    ?>
    <div class="wrapper mt-sm-5">
        <h4 class="pb-4 border-bottom">login to your account</h4>
        <form action="<?php echo base_url().'login/authenticate' ;?>" name="loginform" id="loginform" method="POST">
            <div class="py-2">
                <div>
                    <label for="username">Enter Username</label>
                    <input type="text" class="form-control bg-light" name="username" id="username"
                        placeholder="Enter username">
                </div>
                <?php echo form_error('username'); ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control bg-light" name="password" id="password"
                    placeholder="Password">
            </div>
            <?php echo form_error('password'); ?>
            <div class="py-3 pb-4 border-bottom">
                <button type="submit" class="btn btn-primary mr-3">Sign in</button>
                <a href="<?php echo base_url().'singup/index' ?>" class="btn border button">Sing up</a>
            </div>
        </form>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>