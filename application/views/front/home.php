<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('front/header.php'); ?>
<div class="hero-image">
    <div class="container">
        <div class="header-font">
            Are you hungry?
        </div>
        <div class="after-header-font mt-3">
            <h2>Don't wait!!!</h2>
            <h2>Let's start to Order food now!</h2>
        </div>

        <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-outline-secondary btn-lg p-2 mt-3">Check Out
            Menu</a>
    </div>
</div>

<!-- home section -->
<!-- <header id="home-section">
    <div class="dark-overlay">
        <div class="home-inner container">
            <div class="header-font">
                Are you hungry?
            </div>
            <div class="after-header-font mt-3">
                <h2>Don't wait!!!</h2>
                <h2>Let's start to Order food now!</h2>
            </div>

            <a href="restaurents.html" class="btn btn-outline-secondary btn-lg p-2 mt-3">Check Out Menu</a>

        </div>
</header> -->

<section id="popular" class="p-3">
    <div class="container lead text-center" style="font-size: 2.1rem;">
        <p>Populor dishesh of the month</p>
        <p>The easiest way to your food</p>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($dishesh)) { ?>
            <?php foreach($dishesh as $dish) { ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <?php $image = $dish['img'];?>
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                    <!-- class="bd-placeholder-img card-img-top" width="100%" height="225" -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dish['name']; ?></h5>
                        <hr>
                        <p class="card-text"><?php echo $dish['about']; ?></p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php echo base_url().'Dish/addToCart/'.$dish['d_id']; ?>"
                                class="btn btn-outline-success">Add to
                                Cart</a>
                            </div>
                            <h4 class="text-muted"><b><?php echo $dish['price']; ?></b>/-🍕</h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } else { ?>
            <div class="jumbotron">
                <h1>No records found</h1>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section id="features">
    <div class="lead text-center" style="font-size: 2.4rem;">
        <p>Easy 3 steps order</p>
    </div>
    <div class="row">
        <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3>Choose a restaurent</h3>
            <p>We"ve got your covered with menus from over 345 delivery restaurants online.</p>
        </div>
        <div class="feature-box col-lg-4">
            <i class="icon fas fa-bullseye fa-4x"></i>
            <h3>Choose a tasty dish</h3>
            <p>We"ve got your covered with menus from over 345 delivery restaurants online.</p>
        </div>
        <div class="feature-box col-lg-4">
            <i class="icon fas fa-heart fa-4x"></i>
            <h3>Pick up or Delievry</h3>
            <p>We"ve got your covered with menus from over 345 delivery restaurants online.</p>
        </div>
    </div>
</section>
<?php $this->load->view('front/footer.php'); ?>

</html>