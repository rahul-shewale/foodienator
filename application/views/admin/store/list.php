<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <h2>All Stores data</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Store Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Url</th>
                        <th>Open Hrs</th>
                        <th>Close Hrs</th>
                        <th>Open days</th>
                        <th>Address</th>
                        <th>Store Image</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>hudson</td>
                        <td>hudson</td>
                        <td>hud@gmail.com</td>
                        <td>2345434567</td>
                        <td>hudson.com</td>
                        <td>6am</td>
                        <td>7pm</td>
                        <td>mon-fri</td>
                        <td>Opposite Ostwal gate, Boisar</td>
                        <center>
                            <td><img class="img-responsive radius" 
                            src="<?php echo base_url();?>public/admin/img/res.jpg"
                            style="min-width:150px; min-height: 100px;"></td>
                        </center>
                        <td>2018-04-18 20:02:1</td>
                    </tr>
                    <tr>
                        <td>hudson</td>
                        <td>hudson</td>
                        <td>hud@gmail.com</td>
                        <td>2345434567</td>
                        <td>hudson.com</td>
                        <td>6am</td>
                        <td>7pm</td>
                        <td>mon-fri</td>
                        <td>Opposite Ostwal gate, Boisar</td>
                        <center>
                            <td><img class="img-responsive radius" 
                            src="<?php echo base_url();?>public/admin/img/res2.jpg"
                                    style="min-width:150px; min-height: 100px;"></td>
                        </center>
                        <td>2018-04-18 20:02:1</td>
                    </tr>
                    <tr>
                        <td>hudson</td>
                        <td>hudson</td>
                        <td>hud@gmail.com</td>
                        <td>2345434567</td>
                        <td>hudson.com</td>
                        <td>6am</td>
                        <td>7pm</td>
                        <td>mon-fri</td>
                        <td>Opposite Ostwal gate, Boisar</td>
                        <center>
                            <td><img class="img-responsive radius" 
                            src="<?php echo base_url();?>public/admin/img/res3.jpg"
                                    style="min-width:150px; min-height: 100px;"></td>
                        </center>
                        <td>2018-04-18 20:02:1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $this->load->view('admin/footer'); ?>

</html>