<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('front/header.php'); ?>
<!-- home section -->
<header id="home-section">
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
</header>

<section id="popular">
    <div class="lead text-center my-4" style="font-size: 2.4rem;">
        <p>Populor dishesh of the month</p>
        <p>The easiest way to your food</p>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-lg h-100" style="max-width:400px mx-auto">
                    <img class="card-img-top" src="<?php echo base_url();?>public/admin/img/Tacos.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Tacos</h4>
                        <p class="card-text">Truly authentic Mexican tacos use the soft corn tortillas often made of
                            corn and are stuffed with either meat, chicken or seafood fillings with a pic of spicy
                            salsas</p>
                        <p class="card-text">$180</p>
                        <a href="#" class="btn btn-success btn-block">Order Noe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-lg h-100" style="max-width:400px mx-auto">
                    <img class="card-img-top" src="<?php echo base_url();?>public/admin/img/Meurig.jpg"
                        alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Meurig</h4>
                        <p class="card-text">A whole Pomfret fish grilled with tangy marination & served with
                            grilled onions and tomatoes.</p>
                        <p class="card-text">$260</p>
                        <a href="#" class="btn btn-success btn-block">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow-lg h-100" style="max-width:400px mx-auto">
                    <img class="card-img-top"
                        src="<?php echo base_url();?>public/admin/img/Chocolate_Hazelnut_Truffle.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Chocolate_Hazelnut_Truffle</h4>
                        <p class="card-text">Lose all senses over this very delicious chocolate hazelnut truffle</p>
                        <p class="card-text">$100</p>
                        <a href="#" class="btn btn-success btn-block">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features">
    <div class="lead text-center my-4" style="font-size: 2.4rem;">
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