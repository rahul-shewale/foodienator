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
<section id="contact-us" class="container shadow my-4 p-4">
    <!--Section heading-->
    <?php if($this->session->flashdata('msg') != ""):?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('msg');?>
            </div>
    <?php endif ?>
    <h2 class="text-center my-2 font-weight-bold">Contact Us</h2>
    <p class="text-center">Always Here For You..</p>
    <!--Section description-->
    <p class="text-center mx-auto mb-5"></p>
    <form id="contact-form" name="contact-form" action="<?php echo base_url().'home/sendMail'; ?>"
        onsubmit="return validateForm();" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-2">
                    <label class="mb-0" for="name" class="">Your name</label>
                    <input type="text" id="name" name="name" class="form-control" <?php set_value("name");?>>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label class="mb-0" for="email" class="">Your email</label>
                    <input type="text" id="email" name="email" class="form-control" <?php set_value("email");?>>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="subject" class="">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" <?php set_value("subject");?>>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-2">
                    <label class="mb-0" for="message">Your message</label>
                    <textarea type="text" id="message" name="message" rows="2"
                        class="form-control md-textarea"><?php set_value("message");?></textarea>
                </div>
            </div>
        </div>
        <div class="status text-danger font-weight-bold my-2"></div>
        <button class="btn btn-info" type="submit">Send</button>
    </form>

</section>
<?php $this->load->view('front/footer.php'); ?>
<script>
function validateForm() {
    var name = document.getElementById('name').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Name cannot be empty";
        document.getElementById('name').focus();
        return false;
    }
    var email = document.getElementById('email').value;
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
    var subject = document.getElementById('subject').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Subject cannot be empty";
        document.getElementById('subject').focus();
        return false;
    }
    var message = document.getElementById('message').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Message cannot be empty";
        document.getElementById('message').focus();
        return false;
    }
    return true;
}
</script>
</html>