<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- google fonts for h1 -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Ubuntu&display=swap"
        rel="stylesheet">

    <!-- Font Awesome For Button icon -->
    <script src="https://kit.fontawesome.com/104b96157d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>public/admin/css/dashboard.css">
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url().'admin/home';?>">Foodienator Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        User
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url().'admin/user/';?>">All User</a>
                        <a class="dropdown-item" href="<?php base_url().'admin/user/create';?>">Create User</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Store
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url().'admin/store/';?>">All Store</a>
                        <a class="dropdown-item" href="<?php echo base_url().'admin/store/create_category';?>">Create Categogry</a>
                        <a class="dropdown-item" href="<?php echo base_url().'admin/store/create_restuarent';?>">Create Restaurent</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Menu
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url().'admin/menu';?>">All Menues</a>
                        <a class="dropdown-item" href="<?php echo base_url().'admin/menu/create_menu';?>">Create Menu</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Orders
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url().'admin/orders';?>">All Orders</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url().'admin/home/logout';?>" class="nav-link pull-right"><strong>Logout</strong></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron-fluid text-center bg-light p-3">
        <h3>Dashboard</h3>
    </div>