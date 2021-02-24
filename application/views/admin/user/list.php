<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <h2>All registered users</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Registered Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>niel</td>
                        <td>nitin</td>
                        <td>shewale</td>
                        <td>nitin@example.com</td>
                        <td>9845859684</td>
                        <td>Virar West</td>
                        <td>2/02/2021</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o"
                                    style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>sachin</td>
                        <td>nitin</td>
                        <td>shewale</td>
                        <td>nitin@example.com</td>
                        <td>9845859684</td>
                        <td>Virar West</td>
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
                        <td>Dooley</td>
                        <td>July</td>
                        <td>July@example.com</td>
                        <td>8589859685</td>
                        <td>Thane, Mumbai</td>
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

</html>