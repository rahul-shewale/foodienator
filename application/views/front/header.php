<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/css/index.css">

    <!-- google fonts for h1 -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Ubuntu&display=swap"
        rel="stylesheet">

    <!-- Font Awesome For Button icon -->
    <script src="https://kit.fontawesome.com/104b96157d.js" crossorigin="anonymous"></script>

    <title>Order Food Online</title>

</head>

<body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="<?php echo base_url().'home/index';?>">Foodienator</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'home/index';?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'restaurant/index';?>">Restaurent</a>
                    </li>

                    <?php $user = $this->session->userdata('user'); 
                    if(empty($user)) {
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'login';?>">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'singup/index'?>">singup</a>
                    </li>
                    <?php } else {?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'profile/index';?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'login/logout';?>">logout</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
