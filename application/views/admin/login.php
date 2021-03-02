<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Singin Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .form-container {
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px 0 #000;
    width: 50%;
    }
  </style>
</head>
<body>
  <div class="conatiner">
      <h1 class="text-center mt-3">Administration</h1>
      <p class="text-center mb-4" >login account</p>
      <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger mb-3 mx-auto' style='width:50%'>".$this->session->flashdata('msg')."</div>";
        }
      ?>
        <form action="<?php echo base_url().'admin/login/authenticate' ;?>" name="loginform" id="loginform" method="POST" class="form-container mx-auto">
          <div class="form-group">
            <label for="username">Enter Username</label>
            <input type="text" class="form-control my-2" name="username" id="username" placeholder="Enter username">
          </div>
          <?php echo form_error('username'); ?>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control my-2" name="password" id="password" placeholder="Password">
          </div>
          <?php echo form_error('password'); ?>
          <button type="submit" class="btn btn-primary btn-block mb-2">Submit</button>
          <p>Not registered? <a href="singup.html">Sing up</a></p>
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