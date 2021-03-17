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

<style>
.wrapper {
    background-color: aliceblue;
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px
}


input[placeholder] {
    font-weight: 500
}
</style>

<body>
    <div class="wrapper container">

        <h1 class="text-center my-3">Create your account</h1>
        <form action="<?php echo base_url().'singup/create_user'; ?>" onsubmit="return validateForm();" method="POST"
            name="myForm" id="myForm" class="form-container mx-auto shadow-container" style="width:80%">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" class="form-control
                <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username" id="userName"
                            placeholder="Enter username" value="<?php echo set_value('username')?>">
                        <?php echo form_error('username'); ?>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Enter Last-Name</label>
                        <input type="text" class="form-control 
                <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname" id="lastName"
                            placeholder="Enter Last Name" value="<?php echo set_value('lastname')?>">
                        <?php echo form_error('lastname'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control
                <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="pass"
                            placeholder="Password" value="<?php echo set_value('password')?>">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Enter First-Name</label>
                        <input type="text" class="form-control
                <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname" id="firstName"
                            placeholder="Enter First Name" value="<?php echo set_value('firstname')?>">
                        <?php echo form_error('firstname'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control
                <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="email"
                            id="email" value="<?php echo set_value('email')?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control
                <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Phone"
                            id="phone" value="<?php echo set_value('phone')?>">
                        <?php echo form_error('phone'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" type="text" style="height:70px;" class="form-control
        <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
                    value="<?php echo set_value('address');?>"></textarea>
                <?php echo form_error('address'); ?>
            </div>
            <div class="status text-center text-danger font-weight-bold my-2"></div>
            <button type="submit" class="btn btn-primary btn-block">Create account</button>
            <p>Already registered? <a href="<?php echo base_url().'login/index';?>">Sing in</a></p>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>
    function validateForm() {
        var userName = document.getElementById('userName').value;
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var phone = document.getElementById('phone').value;
        var address = document.getElementById('address').value;

        if (userName == "") {
            document.querySelector('.status').innerHTML = "username cannot be empty";
            document.getElementById('userName').focus();
            return false;
        } else if (userName.length <= 4 || userName.length >= 16) {
            document.querySelector('.status').innerHTML = "**username length should be between 5 and 15";
            document.getElementById('userName').focus();
            return false;
        } else if (!isNaN(userName)) {
            document.querySelector('.status').innerHTML = "**only characters are allowed";
            document.getElementById('userName').focus();
            return false;
        }

        if (firstName == "") {
            document.querySelector('.status').innerHTML = "**Please fill first name field";
            document.getElementById('firstName').focus();
            return false;
        }

        if (lastName == "") {
            document.querySelector('.status').innerHTML = "**Please fill last name field";
            document.getElementById('lastName').focus();
            return false;
        }

        if (email == "") {
            document.querySelector('.status').innerHTML = "Email cannot be empty";
            document.getElementById('email').focus();
            return false;
        } else {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!re.test(email)) {
                document.querySelector('.status').innerHTML = "Email format invalid";
                document.getElementById('email').focus();
                return false;
            }
        }

        if (phone == "") {
            document.querySelector('.status').innerHTML = "mobile number cannot be empty";
            document.getElementById('phone').focus();
            return false;
        } else if (isNaN(phone)) {
            document.querySelector('.status').innerHTML = "**please enter valid mobile number";
            document.getElementById('phone').focus();
            return false;
        } else if ((phone.length) != 10) {
            document.querySelector('.status').innerHTML = "**please enter valid mobile number";
            document.getElementById('phone').focus();
            return false;
        }

        if (pass == "") {
            document.querySelector('.status').innerHTML = "**Please fill password field";
            document.getElementById('pass').focus();
            return false;
        } else if (pass.length <= 7 || pass.length >= 16) {
            document.querySelector('.status').innerHTML = "**password length should be between 8 and 15";
            document.getElementById('pass').focus();
            return false;
        }

        if (address == "") {
            document.querySelector('.status').innerHTML = "address cannot be empty";
            document.getElementById('address').focus();
            return false;
        }
        return true;
    }
    </script>
</body>

</html>