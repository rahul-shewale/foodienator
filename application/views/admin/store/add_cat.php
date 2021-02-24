<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container shadow-container">
    <h2>Add Restaurent Category</h2>
    <form action="" class="form-container">
      <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
<div class="container shadow-container mt-3">
    <div class="container">
        <h2>Listed Categories</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>fish</td>
                        <td>2020-04-15 00:14:33</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>grill</td>
                        <td>2020-05-15 12:14:33</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>thaifood</td>
                        <td>2020-04-15 00:14:33</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
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