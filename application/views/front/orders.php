<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('front/header.php'); ?>

<div class="container mt-3">
    <div class="container shadow-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>All orders</h2>
            </div>
        </div>

        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>Bonefish</td>
                        <td>1</td>
                        <td>$100</td>
                        <<td> <button type="button" class="btn btn-success"><span class="fa fa-check-circle"
                                    aria-hidden="true">Delivered</span></button></td>
                        <td>2021-03-08 01:42:28</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o"
                                    style="font-size:16px"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('front/footer.php'); ?>

</html>