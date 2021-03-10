<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="conatiner">
    <form action="<?php echo base_url().'admin/menu/create_menu';?>" method="POST"
        class="form-container mx-auto  shadow-container" style="width:50%" enctype="multipart/form-data">
        <h3 class="mb-3">Add Menu to Restaurent</h3>
        <div class="form-group">
            <label class="control-label">Select Restaurent</label>
            <select name="rname" class="form-control <?php echo (form_error('rname') != "") ? 'is-invalid' : '';?>">
                <option>--Select Restaurant--</option>
                <?php 
                if (!empty($stores)) { 
                    foreach($stores as $store) {
                        ?>
                <option value="<?php echo $store['r_id'];?>">
                    <?php echo $store['name'];?>
                </option>
                <?php }
                }
                ?>
            </select>
            <?php echo form_error('rname');?>
        </div>
        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="name">Dish Name</label>
                    <input type="text" class="form-control my-2 
                    <?php echo (form_error('name') != "") ? 'is-invalid' : '';?>" name="name" id="name"
                        placeholder="Enter dish name" value="<?php echo set_value('name'); ?>">
                    <?php echo form_error('name'); ?>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="Price" class="form-control my-2
                    <?php echo (form_error('price') != "") ? 'is-invalid' : '';?>" id="price" name="price"
                        placeholder="Enter Price" value="<?php echo set_value('price'); ?>">
                    <?php echo form_error('price'); ?>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="about">About</label>
                    <input type="text" class="form-control my-2
                    <?php echo (form_error('about') != "") ? 'is-invalid' : '';?>" id="about" name="about"
                        placeholder="About" value="<?php echo set_value('about'); ?>">
                    <?php echo form_error('about'); ?>
                </div>
                <div class="form-group">
                    <label for="img">Choose Image</label>
                    <input type="file" id="image" name="image" placeholder="Enter Image" class="form-control my-2
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-2">Submit</button>
        <a href="<?php echo base_url().'admin/menu/index'?>" class="btn btn-secondary">Back</a>
    </form>
</div>

<?php $this->load->view('admin/footer'); ?>

</html>