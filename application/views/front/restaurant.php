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
<div class="container py-3">
    <h3>Seacrh here</h3>
    <input class="form-control mb-3" id="myInput" type="text" placeholder="Search ..">
    <div class="card-deck">
        <?php if(!empty($stores)) { ?>
        <?php foreach($stores as $store) { ?>
        <div id="myCard" class="card">
            <?php $image = $store['img'];?>
            <img class="card-img-top rounded" src="<?php echo base_url().'public/uploads/restaurant/thumb/'.$image; ?>">
            <div class="card-body" id="myDiv">
                <h5 class="card-title"><?php echo $store['name']; ?></h5>
                <p class="card-text"><?php echo $store['address']; ?></p>
                </p>
            </div>
            <div class="text-center mb-3">
                <a href="<?php echo base_url().'dish/list/'.$store['r_id']; ?>" class="btn btn-outline-success">Check
                    out Menu</a>
            </div>
        </div>
        <?php } ?>
        <?php } else {?>
        <h1>no restaurant's in database..add sql for database</h1>
        <?php } ?>
    </div>
</div>
<?php $this->load->view('front/footer.php'); ?>
</html>