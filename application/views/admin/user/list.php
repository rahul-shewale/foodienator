<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <h2>All registered users</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(!empty($users)) {?>
                <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['u_id']; ?></td>
                        <!-- <td>
                            <img src="" alt="">
                        </td> -->
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['f_name']; ?></td>
                        <td><?php echo $user['l_name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td>
                        <a href="<?php echo base_url().'admin/user/edit/'.$user['u_id'];?>" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 mb-1"><i class="fas fa-cog mr-1"></i>Edit</a>
                        <a href="javascript:void(0);" onclick="deleteUser(<?php echo $user['u_id']; ?>)" 
                        class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o mr-1"></i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                        <tr>
                            <td colspan="4">Records not found</td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript">
    function deleteUser(id) {
        if(confirm("Are you sure you want to delete user?")) {
            window.location.href = '<?php echo base_url().'admin/user/delete/';?>'+id;
        }
    }
</script>
</html>