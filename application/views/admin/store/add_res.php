<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="conatiner">
    <form action="<?php echo base_url().'admin/store/create_restaurant';?>" method="POST"
        class="form-container mx-auto  shadow-container" style="width:80%" enctype="multipart/form-data">
        <h3 class="mb-3 p-2 bg-primary mb-3">Add New Restaurant Info</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Restaurant Name</label>
                    <input type="text" name="res_name" class="form-control
                    <?php echo (form_error('res_name') != "") ? 'is-invalid' : '';?>" placeholder="Add restaurant name"
                    value="<?php echo set_value('res_name');?>">

                    <?php echo form_error('res_name'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input type="text" name="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" placeholder="1-(555)-555-5555"
                        value="<?php echo set_value('phone');?>">

                        <?php echo form_error('phone'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Open Hours</label>
                    <select name="o_hr" class="form-control
                    <?php echo (form_error('o_hr') != "") ? 'is-invalid' : '';?>">
                        <option>--Select your Hours--</option>
                        <option value="6am">6am</option>
                        <option value="7am">7am</option>
                        <option value="8am">8am</option>
                        <option value="9am">9am</option>
                        <option value="10am">10am</option>
                        <option value="11am">11am</option>
                    </select>
                    <?php echo form_error('o_hr');?>
                </div>
                <div class="form-group">
                    <label class="control-label">Open Days</label>
                    <select name="o_days" class="form-control<?php echo (form_error('o_days') != "") ? 'is-invalid' : '';?>">
                        <option>--Select your Days--</option>
                        <option value="mon-tue">mon-tue</option>
                        <option value="mon-wed">mon-wed</option>
                        <option value="mon-thu">mon-thu</option>
                        <option value="mon-fri">mon-fri</option>
                        <option value="mon-sat">mon-sat</option>
                        <option value="24hr-x7">24hr-x7</option>
                    </select>
                    <?php echo form_error('o_days');?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="control-label">Bussiness E-mail</label>
                    <input type="text" name="email" class="form-control form-control-danger
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" placeholder="example@gmail.com"
                        value="<?php echo set_value('email');?>">

                        <?php echo form_error('email'); ?>
                </div>
                <div class="form-group has-danger">
                    <label class="control-label">website URL</label>
                    <input type="text" name="url" class="form-control form-control-danger
                    <?php echo (form_error('url') != "") ? 'is-invalid' : '';?>"
                        placeholder=" http://example.com" value="<?php echo set_value('url');?>">
                        <?php echo form_error('url'); ?>
                </div>
                <div class="form-group">
                    <label class="control-label">Close Hours</label>
                    <select name="c_hr" class="form-control
                    <?php echo (form_error('c_hr') != "") ? 'is-invalid' : '';?>">
                        <option>--Select your Hours--</option>
                        <option value="3pm">3pm</option>
                        <option value="4pm">4pm</option>
                        <option value="5pm">5pm</option>
                        <option value="6pm">6pm</option>
                        <option value="7pm">7pm</option>
                        <option value="8pm">8pm</option>
                    </select>
                    <?php echo form_error('c_hr');?>
                </div>
                <div class="form-group has-danger">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control 
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Select Category</label>
            <select name="c_name" class="form-control <?php echo (form_error('c_name') != "") ? 'is-invalid' : '';?>">
                <option>--Select Category--</option>
                <?php 
                if (!empty($cats)) { 
                    foreach($cats as $cat) {
                        ?>
                <option value="<?php echo $cat['c_id'];?>">
                    <?php echo $cat['c_name'];?>
                </option>
                <?php }
                }
                ?>
            </select>
            <?php echo form_error('c_name');?>
        </div>
        <h3 class="box-title m-t-40">Store Address</h3>
        <div class="form-group">
            <textarea name="address" type="text" style="height:70px;"
                class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address');?></textarea>
            <?php echo form_error('address');?>
        </div>
        <div class="form-actions">
            <input type="submit" name="submit" class="btn btn-success" value="save">
            <a href="<?php echo base_url().'admin/store/index'?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php $this->load->view('admin/footer'); ?>

</html>