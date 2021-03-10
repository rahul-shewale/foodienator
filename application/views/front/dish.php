<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('front/header.php'); ?>
<div class="container">
    <div class="my-3 d-flex justify-content-between align-items-center">
        <h2>Menu of restaurant</h2>
        <a href="<?php echo base_url().'cart'; ?>" class="cart-link" title="View cart"><i
                class="fas fa-shopping-cart"></i>
            <span>(<?php echo $this->cart->total_items(); ?>)</span></a>
    </div>
    <!-- <div class="card m-3 text-center">
        <div class="card-header">
            <h3>Your Cart</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Total Dishs: <?php// echo $this->cart->total_items(); ?></h5>
            <h5 class="card-text">$0</h5>
                <a href="#" class="btn btn-primary">Checkout</a>
        </div>
    </div> -->
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


<?php $this->load->view('front/footer.php'); ?>

</html>