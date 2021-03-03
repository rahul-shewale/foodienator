<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singup</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- google fonts for h1 -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Ubuntu&display=swap"
        rel="stylesheet">

    <!-- Font Awesome For Button icon -->
    <script src="https://kit.fontawesome.com/104b96157d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="conatiner">

        <h1 class="text-center mt-3">Singup</h1>
        <p class="text-center mb-4">Create your account</p>
        <form action="<?php echo base_url().'singup/create_user'; ?>" method="POST"
            class="form-container mx-auto shadow-container" style="width:80%">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" class="form-control
                <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username"
                            placeholder="Enter username" value="<?php echo set_value('username')?>">
                        <?php echo form_error('username'); ?>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Enter Last-Name</label>
                        <input type="text" class="form-control 
                <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname"
                            placeholder="Enter Last Name" value="<?php echo set_value('lastname')?>">
                        <?php echo form_error('lastname'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control
                <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password"
                            placeholder="Password" value="<?php echo set_value('password')?>">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Enter First-Name</label>
                        <input type="text" class="form-control
                <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname"
                            placeholder="Enter First Name" value="<?php echo set_value('firstname')?>">
                        <?php echo form_error('firstname'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control
                <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="email"
                            value="<?php echo set_value('email')?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control
                <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Phone"
                            value="<?php echo set_value('phone')?>">
                        <?php echo form_error('phone'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" type="text" style="height:70px;" class="form-control
        <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
                    value="<?php echo set_value('address');?>"></textarea>
                <?php echo form_error('address'); ?>
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
            <p>Already registered? <a href="<?php echo base_url().'login/index';?>">Sing in</a></p>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>