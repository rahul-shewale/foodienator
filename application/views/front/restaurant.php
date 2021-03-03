<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('front/header.php'); ?>

<div class="container bg-light">

    <h2>Order from the restaurants</h2>
    <div class="table-responsive-sm">
        <table class="table table-bordered table-hover table-striped table-responsive">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Store Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($stores)) { ?>
                <?php foreach($stores as $store) { ?>
                <tr>
                    <?php $image = $store['img'];?>
                    <td>
                        <img src="<?php echo base_url().'public/uploads/restaurant/thumb/'.$image; ?>">
                    </td>
                    <td><?php echo $store['name']; ?></td>
                    <td><?php echo $store['address']; ?></td>
                    <td>
                        <a href="#"
                            class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5 mb-1">Add to Cart</a>
                    </td>
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

<?php $this->load->view('front/footer.php'); ?>


</html>