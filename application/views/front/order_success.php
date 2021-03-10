<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('front/header.php'); ?>

<div class="container">
    <h2>Order Status</h2>
    <p class="p-3" style="border: 3px dotted #00ff00;">Your order has been placed successfully.</p>

    <div class="row p-3 mb-3" style="background: #f5f5f5">

        <div class="col-sm-6 p-3">
            <div>Shipping Address</div>
            <p><?php echo $custData['name']; ?></p>
            <p><?php echo $custData['email'];?></p>
            <p><?php echo $custData['phone']; ?></p>
            <p><?php echo $custData['address']; ?></p>
        </div>
        <div class="col-sm-6 p-3">
            <div>Order Info</div>
            <p><b>Referance ID </b><?php echo '#'.$order['o_id']; ?></p>
            <p><b>Grand Total </b><?php echo $order['grand_total']; ?></p>
        </div>
    </div>

    <div class="row p-3 mb-3" style="background: #f5f5f5">
        
    </div>
</div>

<?php $this->load->view('front/footer.php'); ?>

</html>