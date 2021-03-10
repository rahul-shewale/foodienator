<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container mt-3">
        <?php if($this->session->flashdata('cat_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('cat_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <h2>All categories data</h2>
                </div>
                <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
            </div>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if(!empty($cats)) { ?>
                        <?php foreach($cats as $cat) {?>
                        <tr>
                            <td><?php echo $cat['c_id']; ?></td>
                            <td><?php echo $cat['c_name']; ?></td>
                            <td>
                                <a href="<?php echo base_url().'admin/category/edit/'.$cat['c_id']?>"
                                    class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5 mb-1"><i
                                        class="fas fa-cog mr-1"></i>Edit</a>
                                <a href="javascript:void(0);" onclick="deleteCat(<?php echo $cat['c_id']; ?>)"
                                    class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                        class="fa fa-trash-o mr-1"></i>Delete</a>

                            </td>
                        </tr>
                        <?php } ?>
                        <?php } else { ?>
                        <tr>
                            <td colspan="4">Records Not found</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript">
function deleteCat(id) {
    if (confirm("Are you sure you want to delete category?")) {
        window.location.href = '<?php echo base_url().'admin/category/delete/';?>' + id;
    }
}
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
</script>

</html>