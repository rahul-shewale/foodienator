<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="conatiner">
    <form class="form-container mx-auto  shadow-container" style="width:50%">
        <h3 class="mb-3">Add Menu to Restaurent</h3>
        <div class="form-group">
            <label for="dishName">Dish Name</label>
            <input type="text" class="form-control my-2" id="dishName" placeholder="Enter dish name" name="dishName">
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <input type="text" class="form-control my-2" id="about" placeholder="About">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="Price" class="form-control my-2" id="price" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label for="img">Choose Image</label>
            <input type="image" class="form-control my-2" id="img" placeholder="Enter Image">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

<?php $this->load->view('admin/footer'); ?>

</html>