<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('res_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('res_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <h2>All Stores data</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Store Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Url</th>
                        <th>Open Hrs</th>
                        <th>Close Hrs</th>
                        <th>Open days</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($stores)) { ?>
                    <?php foreach($stores as $store) { ?>
                    <tr>
                        <td><?php echo $store['name']; ?></td>
                        <td><?php echo $store['email']; ?></td>
                        <td><?php echo $store['phone']; ?></td>
                        <td><?php echo $store['url']; ?></td>
                        <td><?php echo $store['o_hr']; ?></td>
                        <td><?php echo $store['c_hr']; ?></td>
                        <td><?php echo $store['o_days']; ?></td>
                        <td><?php echo $store['address']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/store/edit/'.$store['r_id']?>"
                                class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5 mb-1"><i
                                    class="fas fa-cog mr-1"></i>Edit</a>

                            <a href="javascript:void(0);" onclick="deleteStore(<?php echo $store['r_id']; ?>)" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o mr-1"></i>Delete</a>
                        </td>
                        <!-- <center>
                            <td><img class="img-responsive radius" 
                            src=" //echo base_url();?>public/admin/img/res.jpg"
                            style="min-width:150px; min-height: 100px;"></td>
                        </center> -->
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="4">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript">
    function deleteStore(id) {
        if(confirm("Are you sure you want to delete store?")) {
            window.location.href = '<?php echo base_url().'admin/store/delete/';?>'+id;
        }
    }
</script>
</html>