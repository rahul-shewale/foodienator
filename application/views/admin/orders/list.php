<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>

<div class="container mt-3">
    <div class="container shadow-container">
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
                    <tr>
                        <td>Nitin</td>
                        <td>Bonefish</td>
                        <td>1</td>
                        <td>$100</td>
                        <td>Virar West</td>
                        <td> <button type="button" class="btn btn-success"><span class="fa fa-check-circle"
                                    aria-hidden="true">Delivered</span></button></td>
                        <td>2/02/2021</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o"
                                    style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Rahul</td>
                        <td>Meurig</td>
                        <td>1</td>
                        <td>$150</td>
                        <td>Bandra West</td>
                        <td> <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>cancelled</button>
                        </td>
                        <td>2/02/2021</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o"
                                    style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Taco</td>
                        <td>3</td>
                        <td>$300</td>
                        <td>Thane, Mumbai</td>
                        <td> <button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"
                                    aria-hidden="true"></span>On a Way!</button></td>
                        <td>22/02/2021</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o"
                                    style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('admin/footer'); ?>
<script>
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