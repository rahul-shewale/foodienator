<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container shadow-container">
    <h2 class="p-2 bg-info">Edit Restaurent Category "<?php echo $cat['c_name'];?>"</h2>
    <form action="<?php echo base_url().'admin/category/edit/'.$cat['c_id'];?>" class="form-container" method="POST">
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" placeholder="Enter Category" name="category" value="<?php echo set_value('category', $cat['c_name']);?>">
            <?php echo form_error('category'); ?>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a class="btn btn-secondary" href="<?php echo base_url().'admin/category/index';?>">Back</a>
    </form>
</div>
<?php $this->load->view('admin/footer'); ?>

</html>