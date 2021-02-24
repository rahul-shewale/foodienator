<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/header'); ?>
<div class="container mt-3">
    <div class="container shadow-container">
        <h2>All Menu data</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Restaurent</th>
                        <th>Dish-Name</th>
                        <th>Slogan</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Silver Dine</td>
                        <td>Meurig</td>
                        <td>A whole Pomfret fish grilled with tangy marination & served with grilled onions and tomatoes.</td>
                        <td>$260</td>
                        <center>
                            <td><img class="img-responsive radius" 
                            src="<?php echo base_url();?>public/admin/img/Meurig.jpg"
                                    style="min-width:150px; min-height: 100px;"></td>
                        </center>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Frenzy</td>
                        <td>Chocolate_Hazelnut_Truffle</td>
                        <td>Lose all senses over this very delicious chocolate hazelnut truffle</td>
                        <td>$100</td>
                        <center>
                            <td><img class="img-responsive radius" 
                            src="<?php echo base_url();?>public/admin/img/Chocolate_Hazelnut_Truffle.jpg"
                                    style="min-width:150px; min-height: 100px;"></td>
                        </center>
                        <td>
                            <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i
                                    class="fa fa-trash-o" style="font-size:16px"></i></a>
                            <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10 m-l-5"><i
                                    class="fas fa-cog"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>LeCafe</td>
                        <td>Tacos</td>
                        <td>Truly authentic Mexican tacos use the soft corn tortillas often made of corn and are stuffed with either meat, chicken or seafood fillings with a pic of spicy salsas</td>
                        <td>$180</td>
                        <center>
                            <td><img class="img-responsive radius"
                             src="<?php echo base_url();?>public/admin/img/Tacos.jpg"
                                    style="min-width:150px; min-height: 100px;"></td>
                        </center>
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