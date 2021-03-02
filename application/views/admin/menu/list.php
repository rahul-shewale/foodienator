<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('dish_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('dish_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <h2>All Menu data</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Dish-Name</th>
                        <th>About</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($dishesh)) { ?>
                    <?php foreach($dishesh as $dish) {?>
                    <tr>
                        <td><?php echo $dish['name']; ?></td>
                        <td><?php echo $dish['about']; ?></td>
                        <td><?php echo $dish['price']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/menu/edit/'.$dish['d_id']; ?>"
                                class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog mr-1"></i>Edit</a>

                            <a href="javascript:void(0);" onclick="deleteMenu(<?php echo $dish['d_id']; ?>)" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o mr-1"></i>Delete</a>

                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="4">Records not founds</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript">
    function deleteMenu(id) {
        if(confirm("Are you sure you want to delete dish?")) {
            window.location.href = '<?php echo base_url().'admin/menu/delete/';?>'+id;
        }
    }
</script>
</html>