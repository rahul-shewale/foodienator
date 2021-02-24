<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="conatiner">
    <form class="form-container mx-auto  shadow-container" style="width:50%">
        <h3 class="mb-3">Add New Restaurent Info</h3>
        <div class="form-group">
            <label for="resname">Enter Restaurent Name</label>
            <input type="text" class="form-control my-2" id="resname" placeholder=">Enter Restaurent Name">
        </div>
        <div class="form-group">
            <label for="resemail">Enter Buisness Email</label>
            <input type="email" class="form-control my-2" id="resemail" placeholder="Enter Buisness Email">
        </div>
        <div class="form-group">
            <label for="resphone">Phone</label>
            <input type="phone" class="form-control my-2" id="resphone" placeholder="Enter Phone No">
        </div>
        <div class="form-group">
            <label for="url">Enter URL</label>
            <input type="url" class="form-control my-2" id="url" placeholder="Enter Website URL">
        </div>
        <div class="form-group">
            <label for="ohrs">Open Hours</label>
            <input type="text" class="form-control my-2" id="ohrs" placeholder="Enter Open Hours">
        </div>
        <div class="form-group">
            <label for="chrs">Close Hours</label>
            <input type="text" class="form-control my-2" id="chrs" placeholder="Enter Close Hours">
        </div>
        <div class="form-group">
            <label for="odays">Open Days</label>
            <input type="text" class="form-control my-2" id="odays" placeholder="Enter Open Days">
        </div>
        <div class="form-group">
            <label for="category">Enter Category</label>
            <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
          </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

<?php $this->load->view('admin/footer'); ?>

</html>