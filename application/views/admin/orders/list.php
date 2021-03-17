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
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>All orders</h2>
            </div>
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
        </div>

        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Reg-date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($orders)) {?>
                    <?php foreach($orders as $order) { ?>
                    <tr>
                        <td><?php echo $order['username']; ?></td>
                        <td><?php echo $order['d_name']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td><?php echo $order['price']; ?></td>
                        <td><?php echo $order['address']; ?></td>


                        <?php $status=$order['status'];
						if($status=="" or $status=="NULL") { ?>
                        <td> <button type="button" class="btn btn-info" style="font-weight:bold;"><span
                                    class="fa fa-bars" aria-hidden="true">Dispatch</button></td>
                        <?php } if($status=="in process") { ?>
                        <td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"
                                    aria-hidden="true"></span>On a Way!</button></td>
                        <?php } if($status=="closed") { ?>
                        <td> <button type="button" class="btn btn-success"><span class="fa fa-check-circle"
                                    aria-hidden="true">Delivered</button>
                        </td> <?php } ?> <?php if($status=="rejected") { ?>
                        <td> <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>cancelled</button>
                        </td>
                        <?php } ?>
                        <td><?php echo $order['date']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/orders/processOrder/'.$order['o_id'];?>"
                                class="btn btn-danger mb-1"><i class="fa fa-trash-o" style="font-size:16px"></i>
                                Process</a>
                            <a href="<?php echo base_url().'admin/orders/deleteOrder/'.$order['o_id']?>"
                                class="btn btn-info"><i class="fas fa-cog"></i> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else {?>
                    <tr>
                        <td colspan="8">Records not found</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/footer'); ?>
<script>
function deleteOrder(id) {
    if (confirm("Are you sure you want to delete orders?")) {
        window.location.href = '<?php echo base_url().'admin/orders/deleteOrder/';?>' + id;
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

</html>